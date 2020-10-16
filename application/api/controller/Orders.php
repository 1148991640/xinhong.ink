<?php

namespace app\Api\controller;

use think\Controller;
use think\Db;

class Orders extends Controller
{
    public function addEva(){
        $data=$_GET;
        $data['time']=date("Y-m-d H:i:s",time());
        $model=Db::name("orders");
        $commentModel=Db::name("comment");
        $model->startTrans();
        $ordersStatus=$model->update(array("id"=>$data['oid'],"status"=>3));
        $msgStatus=$commentModel->insert($data);
        if($ordersStatus&&$msgStatus){
            $model->commit();
            echo json_encode(array("code"=>0));
        }else{
            $model->rollback();
            echo json_encode(array("code"=>1));
        }

    }
    public function receOrders(){
        $model=Db::name('Orders');
        $id=$this->request->param("id");
        if($model->update(array("id"=>$id,"status"=>2))){
            $json = json_encode(array("code" =>0 ,"msg" =>'success'));
            echo $json;
        }else{
            $json = json_encode(array("code" =>1 ,"msg" =>'success'));
            echo $json;
        }
    }

    public function cancelOrders(){
        $model=Db::name('Orders');
        $map=$this->request->param();
        if($model->where($map)->delete()){
            $json = json_encode(array("code" =>0 ,"msg" =>'success'));
            echo $json;
        }else{
            $json = json_encode(array("code" =>1 ,"msg" =>'success'));
            echo $json;
        }
    }
    public function getOrders(){
        $map=$this->request->param();
        $model=Db::name("Orders");
        $orders=$model->where($map)->order("id desc")->select();
        $json = json_encode(array("orders"=>$orders,"code" =>0 ,"msg" =>'success'));
        echo $json;
    }
    public function addOrders(){
        header("Content-type:text/html;charset=utf-8");
        $goodsArr=json_decode($_GET['goods']);
        $goods='';
        $price='';
        $num='';
        $money=0;
     foreach ($goodsArr as $v){
         $goods.=$v->name.",";
         $price.=$v->price.",";
         $num.=$v->num.",";
         $money+=$v->num*$v->price;
     }
     $address=json_decode($_GET['address']);
     //$location= json_decode(file_get_contents("http://api.map.baidu.com/geocoder/v2/?output=json&pois=1&ak=FibyXjBULktxaAevkO3NBGn4rFEKKsG7&address=".$address->detail));
     $data=array(
         "name"=>$address->name,
         "tel"=>$address->phone,
         "address"=>$address->detail,
         "goods"=>$goods,
         "num"=>$num,
         "price"=>$price,
         "money"=>$money,
         //"lat"=>$location->result->location->lat,
         //"lng"=>$location->result->location->lng,
         "openId"=>$_GET['openId'],
         "status"=>0,
         "time"=>date("Y-m-d H:i:s",time()),
     );
       $model=Db::name("Orders");
       if($model->insert($data)){
           echo 0;
       }else{
           echo 1;
       }

    }
}
<?php
namespace app\admin\controller;
use think\Db;
use think\Session;
class Orders extends CheckLogin{

    public function all(){
        $model=Db::name("orders");
        $list=$model->order("time desc")->paginate();
        $arr=array();
        foreach ($list as $k=>$v){
            $arr[$k]=$v;
            $arr[$k]['goodsName']=explode(",",$v['goods']);
            $arr[$k]['goodsPrice']=explode(",",$v['price']);
            $arr[$k]['goodsNum']=explode(",",$v['num']);
        }
        $this->assign("list", $arr);
        $this->assign("page", $list->render());
        return $this->fetch();
    }

    public function send(){
        $id=$this->request->param("id");
        $model=Db::name("orders");
        if($model->update(array("id"=>$id,"status"=>1))){
            $this->success("发货成功！");
        }else{
            $this->error("发货失败");
        }
    }


   public function getDistance($lat1, $lng1, $lat2, $lng2)
    {
        $earthRadius = 6367000; //approximate radius of earth in meters
        $lat1 = ($lat1 * pi() ) / 180;
        $lng1 = ($lng1 * pi() ) / 180;
        $lat2 = ($lat2 * pi() ) / 180;
        $lng2 = ($lng2 * pi() ) / 180;
        $calcLongitude = $lng2 - $lng1;
        $calcLatitude = $lat2 - $lat1;
        $stepOne = pow(sin($calcLatitude / 2), 2) + cos($lat1) * cos($lat2) * pow(sin($calcLongitude / 2), 2);
        $stepTwo = 2 * asin(min(1, sqrt($stepOne)));
        $calculatedDistance = $earthRadius * $stepTwo;
        return round($calculatedDistance);
    }
}

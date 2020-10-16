<?php
namespace app\Api\controller;
use think\Controller;
use think\Db;

class Goods extends Controller{
    public function getGoodsInfo(){
        $id=$this->request->param("id");
        $model=Db::name("Goods");
        $info=$model->alias("g")->join("category c","g.cid=c.id")->field("g.*,c.name as cname")->where("g.id='$id'")->find();
        echo json_encode(array("goodsInfo"=>$info,"code" => 0, "msg" => 'success'));

    }
    public function getSearch(){
        $goodsModel=Db::name("Goods");
        $q=$this->request->param("q",'');
        $data=$goodsModel->where("name like '%$q%'")->select();

        $json = json_encode(
            array(
                "goods"=>$data,
                "code"=>0,
                "msg"=>"success"
            )
        );
        echo $json;
    }
    public function getGoods(){
        $goodsModel=Db::name("Goods");
        $rand=$this->request->param("order");
        if($rand=="rand"){
            $data=$goodsModel->orderRaw("rand()")->paginate();
        }else{
            $data=$goodsModel->order("id ".$rand)->paginate();
        }
        $json = json_encode(
            array(
                "goods"=>$data,
                "code"=>0,
                "msg"=>"success"
            )
        );
        echo $json;
    }
    public function getCateGoods(){
        $map=$this->request->param();
        $goodsModel=Db::name("Goods");
        $data=$goodsModel->where($map)->paginate();
        $json = json_encode(
            array(
                "goods"=>$data,
                "code"=>0,
                "msg"=>"success"
            )
        );
        echo $json;
    }
}
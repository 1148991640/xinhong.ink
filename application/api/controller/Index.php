<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-01-26
 * Time: 3:20
 */
namespace app\Api\controller;
use think\Controller;
use think\Db;

class Index extends Controller{
    public function addComment()
    {
        $data = $_GET;
        $data['time'] = date("Y-m-d H:i:s", time());
        $arr=array("id"=>$data['oid'],"status"=>5);
        Db::startTrans();
        try{
            Db::table("Comment")->insert($data);
            Db::table("Orders")->update($arr);
            // 提交事务
            Db::commit();
            echo json_encode(array(  "code" => 0, "msg" => 'success'));
        } catch (\Exception $e) {
            // 回滚事务
            Db::rollback();
            echo json_encode(array(  "code" => 1, "msg" => 'error'));;
        }

    }


    public function getIndexCate(){
        $model=Db::name("Category");
        $cate1=$model->limit(0,5)->select();
        $cate2=$model->limit(5,5)->select();
        $json = json_encode(array("cate1"=>$cate1,"cate2"=>$cate2,"code" =>0 ,"msg" =>'success'));
        echo $json;
    }
    public function getCate(){
        $model=Db::name("Category");
        $cate=$model->select();
        $json = json_encode(array("cate"=>$cate,"code" =>0 ,"msg" =>'success'));
        echo $json;
    }

    public function getLocation(){

        $location="&location=".$_GET["latitude"].",".$_GET["longitude"];
        $ak = "FibyXjBULktxaAevkO3NBGn4rFEKKsG7";  //baidu Map Ak
        $url="http://api.map.baidu.com/geocoder/v2/?output=json&pois=1&ak=".$ak.$location;
        $result = file_get_contents($url);
        echo $result;
    }
    public function getOpenId(){
        $url="https://api.weixin.qq.com/sns/jscode2session";
        $appid='wx3428694e46f8c2c5';//小程序appid
        $secret='6d128892e85bab09234d18addb242baa';//小程序密钥
        $js_code=$this->request->param('js_code');
        $sendurl= $url."?appid=".$appid."&secret=".$secret."&js_code=".$js_code."&grant_type=authorization_code";
        $result =json_decode(file_get_contents($sendurl));
        $openid=md5($result->openid);
        echo json_encode(array("openid"=>$openid));
    }
    public function getIndex(){
        $banners=array(
            "b1.jpg",
            "b2.jpg",
            "b3.jpg",
            "b4.jpg"
        );
        $model=Db::name("Goods");
        $goods= $model->paginate(20);
        $json = json_encode(array("banners"=>$banners,"goods"=>$goods,"code" =>0 ,"msg" =>'success'));
        echo $json;
    }


}
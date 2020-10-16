<?php
namespace app\admin\controller;
use think\Request;
use think\Session;
use think\Db;
class Index extends CheckLogin
{
    public function index()
    {
        $this->is_login();
		return $this->fetch();
    }
    public function set(){
        $this->is_login();
        $model = Db::name("admin");
        if ($this->request->isPost()) {
            $data = $this->request->param();
            $location= json_decode(file_get_contents("http://api.map.baidu.com/geocoder/v2/?output=json&pois=1&ak=FibyXjBULktxaAevkO3NBGn4rFEKKsG7&address=".$data['address']));
            $data['lat']=$location->result->location->lat;
            $data['lng']=$location->result->location->lng;
            if ($model->update($data)) {
                $this->success("操作成功！");
            } else {
                $this->error("操作失败");
            }
        } else {
            $info = $model->find(Session::get("admin_id"));
            $this->assign("info", $info);
            return $this->fetch();

        }
    }
    public function pass(){
        $request = Request::instance();
        $this->is_login();
        if($request->isPost()){
            $id=Session::get('admin_id');
            $model=Db::name("admin");
            $info=$model->find($id);
            if($info['pwd']==$request->param("pwd")){
                $data=array("id"=>$id,"pwd"=>$request->param('newpwd'));
                //var_dump($data);die;
                if($model->update($data)){
                    $this->success("密码修改成功");
                }{
                    $this->error("密码修改失败!");
                }
            }else{
                $this->error("原密码错误!");
            }

        }else{
            return $this->fetch();
        }
    }
}

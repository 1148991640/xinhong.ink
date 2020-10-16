<?php
namespace app\admin\controller;
use think\Db;

class Admin extends CheckLogin{
    public function all(){
        $model=Db::name("admin");
        $list=$model->paginate(10);
        $this->assign("list",$list);
        return $this->fetch();

    }
    public function add(){
        $this->is_login();
        if($this->request->isPost()){
            $data=$_POST;
            $model=Db::name("admin");
            if($model->where("name='{$data['name']}'")->count()){
                $this->error("用户名已存在");
            }else{
                if($model->insert($data)){
                    $this->success("添加成功!","all");
                }else{
                    $this->error("添加失败!");
                }
            }

        }else{
           return $this->fetch();
        }
    }
    public function edit(){
        $this->is_login();
        $model=Db::name("admin");
        if($this->request->isPost()){
            $data=$_POST;
            if($model->update($data)){
                $this->success("修改成功!",url("all"));
            }else{
                $this->error("修改失败!");
            }
        }else{
            $this->assign("info",$model->find($this->request->param("id")));
            return $this->fetch();
        }

    }
    public function del(){
        $this->is_login();
        $model=Db::name("admin");
        if($model->where("id=".$this->request->param("id"))->delete()){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }

    }
}

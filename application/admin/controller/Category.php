<?php
namespace app\admin\controller;
use think\Db;
class Category extends CheckLogin
{
    public function all(){

        $this->is_login();
        $CategoryModel = Db::name("Category");
        $CategoryList = $CategoryModel->paginate(5);
        $this->assign("list", $CategoryList);
        return $this->fetch();
    }
    public function  add(){
        $this->is_login();
        $model = Db::name("Category");
        if ($this->request->isPost()) {
            $data = $this->request->param();
            $file=$this->request->file("pic");
            if($file) {
                $info = $file->validate(['size'=>9999999,'ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS . 'Uploads/');
                if ($info) {
                    $data['pic']=str_replace("\\","/",$info->getSaveName());
                    // 输出 42a79759f284b767dfcb2a0197904287.jpg
                } else {
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }
            if ($model->insert($data)) {
                $this->success("添加成功！", "all");
            } else {
                $this->error("添加失败!");
            }
        } else {
            return $this->fetch();

        }
    }
    public function edit(){
        $this->is_login();
        $model = Db::name("Category");
        if ($this->request->isPost()) {
            $data = $this->request->param();
            $file=$this->request->file("pic");
            if($file) {
                $info = $file->validate(['size'=>9999999,'ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS . 'Uploads/');
                if ($info) {
                    $data['pic']=str_replace("\\","/",$info->getSaveName());
                    // 输出 42a79759f284b767dfcb2a0197904287.jpg
                } else {
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }
            if ($model->update($data)) {
                $this->success("编辑成功！", "all");
            } else {
                $this->error("编辑失败!");
            }
        } else {
            $this->assign("info",$model->find($this->request->param("id")));
            return $this->fetch();

        }
    }
    public function del()
    {
        $this->is_login();
        $model = Db::name("Category");
        $id = $this->request->param("id");
        if ($model->delete($id)) {
            $this->success("删除成功！");
        } else {
            $this->error("删除失败");
        }
    }
}
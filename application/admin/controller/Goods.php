<?php
namespace app\admin\controller;
use think\Db;
use think\Session;

class Goods extends CheckLogin
{
    public function all(){
        $this->is_login();
        $GoodsModel = Db::name("Goods");
        $GoodsList = $GoodsModel->alias("g")->join("category c","g.cid=c.id")->field("g.*,c.name cname")->paginate(5);
        $this->assign("list", $GoodsList);
        return $this->fetch();
    }
    public function  add(){
        $this->is_login();
        $model = Db::name("Goods");
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
            $data=Db::name("Category")->select();
            $this->assign("cate",$data);
            return $this->fetch();

        }
    }
    public function edit(){
        $this->is_login();
        $model = Db::name("Goods");
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
            $data=Db::name("Category")->select();
            $this->assign("cate",$data);
            $this->assign("info",$model->find($this->request->param("id")));
            return $this->fetch();

        }
    }
    public function del()
    {
        $this->is_login();
        $model = Db::name("Goods");
        $id = $this->request->param("id");
        if ($model->delete($id)) {
            $this->success("删除成功！");
        } else {
            $this->error("删除失败");
        }
    }
}
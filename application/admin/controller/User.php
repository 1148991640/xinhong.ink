<?php

namespace app\admin\controller;

use think\Db;

class User extends CheckLogin
{
    public function all()
    {
        $this->is_login();
        $model = Db::table("User");
        $list = $model->paginate(10);
        $this->assign("list", $list);
        return $this->fetch();
    }


    public function edit()
    {
        $this->is_login();
        $model = Db::name("User");
        if ($this->request->isPost()) {
            $data = $this->request->param();
            if ($model->update($data)) {
                $this->success("操作成功！", "all");
            } else {
                $this->error("操作失败");
            }
        } else {
            $info = $model->find($this->request->param("id"));
            $this->assign("info", $info);
            return $this->fetch();

        }
    }


    public function del()
    {
        $this->is_login();
        $model = Db::name("User");
        $id = $this->request->param("id");
        if ($model->delete($id)) {
            $this->success("删除成功！");
        } else {
            $this->error("删除失败");
        }
    }


}
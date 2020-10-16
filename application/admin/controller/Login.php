<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Request;
use think\Session;

class Login extends Controller
{
    public function index()
    {
        if ($this->request->isPost()) {

            $userModel = Db::name("admin");
            $map = $this->request->param();
            $result = $userModel->where($map)->find();
            if (!$result) {
                $this->error("用户名或密码不正确");
            } else {
                Session::set('admin_id', $result['id']);
                Session::set('admin_name', $result['name']);
               // Session::set('admin_relName', $result['relName']);
               // Session::set('admin_role', 1);
                $this->success('登录成功！', 'admin/Index/index');
            }
        } else {
            return $this->fetch();
        }
    }

    public function logout()
    {
        //        1.清除当前的session
        Session::clear();
        //        2.跳转到登录页面
        $this->success('成功退出登录', 'index');
    }
}
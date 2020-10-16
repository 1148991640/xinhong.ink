<?php
namespace app\admin\controller;

use think\Controller;
use think\Session;

class CheckLogin extends Controller
{
    public function _initialize()
    {

    }

    /**
     * 检测用户是否登录

     */
    protected function is_login()
    {
        $status = Session::has('admin_id');
        if (empty($status)){
            $this->error('您还未登陆,请先登录！',url('admin/Login/index'));
        }


    }
}
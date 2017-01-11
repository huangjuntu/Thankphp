<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * use Common\Model 这块可以不需要使用，框架默认会加载里面的内容
 */
class LoginController extends Controller {

    public function index(){
        // 如果登陆的时候，session信息存在，就跳转到后台首页
        if(session('adminUser')){
            $this->redirect('/thinkphp3.2/model/index.php?m=admin&c=index');
        }
    	return $this->display();
    }

    public function check(){
    	// echo "check_success";
        // print_r($_POST);
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(!trim($username)){
            return show(0,'用户名不能为空');
        }
        if(!trim($password)){
            return show(0,'密码不能为空');
        }
        $ret = D('Admin')->getAdminByUsername($username);
        $pas = D('Admin')->getAdminByUsername($password);
        // print_r($ret);
        if(!$ret){
            return show(0,'该用户不存在');
        }
        if(!$pas){
            return show(0,'密码输入错误');
        }
        // 把用户是否登录的信息放到session里面
        session('adminUser',$ret);
        return show(1,'登陆成功！');
    }
    public function loginout(){
        session('adminUser',null);
        $this->redirect('/thinkphp3.2/model/index.php?m=admin&c=login');
    }

}
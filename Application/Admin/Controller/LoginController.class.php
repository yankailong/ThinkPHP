<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
	public function index(){
		// echo encrypt_password('123456');die;
		//一个方法处理两个逻辑
		if(IS_POST){
			//表单提交
			$data = I('post.');
			//调用Verify类的check方法 验证验证码
			// dump($data);die;
			//实例化Verify类
			/*$verify = new \Think\Verify();
			if( !$verify -> check($data['code']) ){
				$this -> error('验证码错误');
			}*/
			//根据用户名查询数据库
			$model = D('Manager');
			$manager = $model -> where( array('username' => $data['username']) ) -> find();
			// var_dump($manager);die;
			//判断查询结果，是否有这个用户存在
			if($manager && encrypt_password( $data['password'] ) == $manager['password'] ){
				// var_dump(encrypt_password( $data['password'] ));die;
				//登录成功  用户名存在并且密码正确
				//设置一个登录标识到session
				session('manager_info', $manager);
				$this -> success('登录成功', U('Admin/Index/index'));
			}else{
				//登录失败
				// var_dump($manager);die;
				$this -> error('登录失败');
			}
		}else{
			$this -> display();
		}
	}
}




?>


<?php
namespace Admin\Controller;
use Think\Controller;
class ManagerController extends Controller{

	public function index(){
		$model = D('Manager');
		$data = $model -> select();
		$this -> assign('data', $data);
		$this -> display();
	}

	public function add(){
		$this -> display();
	}

	public function edit(){
		$this -> display();
	}

	public function lists(){
		$this -> display();
	}
}


?>
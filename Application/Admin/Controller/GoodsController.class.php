<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller{
	public function index(){
		//实例化
		$model = D('Goods');
		$data = $model -> select();
		//变量赋值
		$this -> assign('data', $data);
		$this -> display();
	}

	public function add(){
		if (IS_POST) {
			$data = I('post.');
			$model = M('Goods');
			$res = $model -> add($data);
			if ($res) {
				$this -> success('添加成功', U("Admin/Goods/index"));
			}else{
				$this -> error('添加失败，请重试');
			}

		}else{
			$this -> display();
		}
	}

	public function detail(){
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
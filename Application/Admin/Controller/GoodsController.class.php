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
			$model = D('Goods');
			//add方法添加
			// $res = $model -> add($data);
			
			//使用create方法自动创建数据集
			if (!$model -> create($data)) {
				$error = $model -> getError();
				$this -> error($error);
			}
			$res = $model -> add();

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
		$model = M('Goods');

		if (IS_POST) {
			//处理post表单提交
			$data = I('post.');
			//调用sava方法完成修改
			$res = $model -> save($data);
			if ($res !== false) {
				# 修改成功
				$this -> success('修改成功', U('Admin/Goods/index'));
			}else{
				//验证失败
				$this -> error('修改失败，请重试');
			}
		}else{
			//获取get请求中的id参数
			$id = I('get.id');
			// dump($id);die;
			//查询$id对应的商品信息
			$goods = $model -> find($id);
			$this -> assign('goods', $goods);
			$this -> display();			
		}

	}

	public function delete(){
		//删除操作
		$id = I('get.id');
		//实例化模型
		$model = M('Goods');
		//调用delete方法删除数据
		$res = $model -> delete($id);
		// dump($res);die;
		if ($res !== false) {
			$this -> success('删除成功', U('Admin/Goods/index'));
		}else{
			$this -> error('删除失败,请重试');
		}
	}

	public function lists(){
		$this -> display();
	}
	

}


?>
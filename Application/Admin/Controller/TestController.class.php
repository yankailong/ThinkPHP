<?php
namespace Admin\Controller;
use Think\Controller;
// use Admin\Model\GoodsModel;
class TestController extends Controller
{	
	public function index()
	{
		// 1. $model = new \Admin\Model\GoodsModel();
		 // 2.$model = new GoodsModel();
		//快速实力化
		// $model = D('Goods');
		
		// $model = M(Manager);
		//M  只实例化父类  D  可以实例化父类 自定义
		//
		//特殊表的实例化 D函数
		// $model = D('Advice');

		//特殊表的实例化 M函数  第二个参数可以设置表前缀，null表示没有前缀，也可以直接指定前缀
		$model = M('Advice', null);		
		dump($model);die;
	}

	public function chaxun(){
		//实例化Goods模型
		$model = D('Goods');

		//调用select方法查询所有数据
		//查询主键为3的一条数据 二维数组
		// $data = $model -> select(3);
		// dump($data);die;
		
		//调用find方法查询所有数据
		//查询结果  一维数组 一条数据
		// $data = $model -> find(4);
		// dump($data);die;
		
		//辅助方法
		// $data = $model ->where("id = 4") -> select();
		// $data = $model ->where(array('id' => array("GT", 4)) ) -> select();
		// $data = $model ->field('id,goods_name') -> select();
		// $data = $model->limit('0,3') ->order('id desc') -> select();
		// dump($data);die;
		
		//统计查询
		// $data = $model ->where(array('id' => array("GT", 4)) ) -> count();
		// dump($data);die;

		//连表查询
		$adviceModel = D('Advice');
		$data = $adviceModel -> alias('t1') ->field('t1.*,t2.username') -> join("left join tpshop_user t2 on t1.user_id=t2.id") -> select();
		dump($data);die;
		
	}

	//展示
	public function zhanshi(){
		$name = 'ykl';

		$this ->assign('name', $name);
		// dump($name);die;
		
		$model = D('Goods');
		$data = $model ->select();
		$this ->assign('data', $data);
		// var_dump($data);die;

		$this ->display();	
	}

	//添加
	public function tianjia(){
		//数组方式添加 add方法 一维数组
		$model = D('Goods');
		// $data = array('goods_name' => 'abc', 'goods_price' => 10);
		// $res = $model -> add($data);
		// dump($res);
		
		// $model = D('Goods');
		// $data = array(
		// 	array('goods_name' => 'abcd', 'goods_price' => 10),
		// 	array('goods_name' => 'd', 'goods_price' => 10),
		// 	);

		//调用addALL方法
		// $res = $model -> addAll($data);
		// dump($res);
		
		//AR方式添加
		$model -> goods_name = 'ykl';
		$model -> goods_price = '1';
		$res = $model ->add();
		dump($res);

	}
}

?>
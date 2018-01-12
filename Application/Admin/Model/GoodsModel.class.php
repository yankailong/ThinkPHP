<?php
namespace Admin\Model;
use Think\Model;
class GoodsModel extends Model{
	//模型中的属性和方法
	
	//字段定义 手动定义数据表含有的字段（新增或者修改这些字段会写入数据表）
	// protected $fields = array('id', 'goods_name', 'goods_price', 'goods_number');
	// //指定主键字段 如果数据表字段不叫id
	// protected $pk ='goods_id';
	
	//字段映射
	// protected $map = array(
	// 	'name' => 'goods_name',
	// 	'price' => 'goods_price',
	// 	'number' => 'goods_number',
	// 	);
	
	//模型提供了一个自动验证的功能
	protected $_validate = array(
		array('goods_name','require','商品名不能为空 ',0,'',3),
		array('goods_price','require','商品价格字段不能为空',0,'',3),
		array('goods_number','number','商品数量不能为空',0,''),
		// array(),

		);

	//自动完成
	protected $_auto = array(
		//array(完成字段1，完成规则,[完成条件，附加条件])
		array('goods_create','time',1,'function')
		);
	

}


?>
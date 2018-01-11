<?php
namespace Home\Controller;

use Think\Controller;

/**
* 测试  闫凯龙 1.10 2018
*/
class TestController extends Controller
{
	//定义具体的方法
	public function index()
	{
		// echo "U函数,动态生成url";'<br>'
		// echo U('Home/Test/index');
		$this -> display();
	}

	public function test(){
		$person = array('name' => 'zhenzhen', 'age' => 18 );
		dump($person);
	}
}

?>
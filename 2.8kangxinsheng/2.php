<?php
//封装的操作

class Pig{
	
	//protected $name = "小白";
	private $name = "小白";
	public $age = "10";
	public function fly(){
		
		return "正在飞";
	}
}
//实例化一个对象

$bird = new Pig();

//echo $bird -> name;
echo $bird -> fly();
?>
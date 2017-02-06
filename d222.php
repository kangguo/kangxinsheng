<?php
header("Content-Type:text/html;charset=utf-8");

//抽象一个类
//实例化一个类

class Pig{
	
	public $name = "小红";
	public $age = "12";
	
	public function pao(){
		
		return $this ->name."正在跑...";
	}
	
}

$obj = new Pig();
//echo $obj -> name;
echo $obj -> pao();


?>
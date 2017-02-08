<?php
//抽象类的操作

abstract class Bird{
	
	public $name = "小小";
	public function fly(){
		
		return "我在飞";
	}
	
}
class Bai extends Bird{
	
	//在子类里重写
	public function fly(){
		
	}
}
$usb = new Bai();
echo $usb ->name;
?>
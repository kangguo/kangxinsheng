<?php
//继承的操作

class Bird{
	
	public $name="xiaobai";
	public function fly(){
		
		return "正在飞";
		
	}
}
class Pig extends Bird{
	
	public function fly(){
		//重载父类中的方法 
		echo parent::fly();
		return "出来";
	}
}
$usb = new Pig();
echo $usb->fly();

?>
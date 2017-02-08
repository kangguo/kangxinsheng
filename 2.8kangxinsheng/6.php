<?php
//继承的操作

class Bird{
	
	//成员属性
	//protected $name = "白领";
	private $name = "白领";  //private 是不能被继承
	
	
}
class Pig extends Bird{
	
	public function pao(){
		
		return $this->name."再跑";
}
}

$pig = new Pig();
echo $pig->pao();
?>
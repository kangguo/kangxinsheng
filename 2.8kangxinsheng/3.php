<?php
//继承的操作

class Pig{
	
	//protected $name = "小白";
	public $name = "小白";
	public $age = "10";
	public function fly(){
		
		return "正在飞";
	}
}
class Dog extends Pig{
	
}


//实例化一个对象

$bird = new Dog();

echo $bird -> name;
echo $bird -> fly();

?>
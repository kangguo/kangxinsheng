<?php
//��װ�Ĳ���

class Pig{
	
	//protected $name = "С��";
	public $name = "С��";
	public $age = "10";
	public function fly(){
		
		return "���ڷ�";
	}
}
class Dog extends Pig{
	
	public $uname = "С��";
}

class Egg extends Dog{
	
	
}
//ʵ����һ������

/* $bird = new Dog();

echo $bird -> name;
echo $bird -> uname;
echo $bird -> fly(); */

$bird = new Egg();
echo $bird -> name;
?>
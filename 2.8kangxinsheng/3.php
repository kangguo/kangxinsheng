<?php
//�̳еĲ���

class Pig{
	
	//protected $name = "С��";
	public $name = "С��";
	public $age = "10";
	public function fly(){
		
		return "���ڷ�";
	}
}
class Dog extends Pig{
	
}


//ʵ����һ������

$bird = new Dog();

echo $bird -> name;
echo $bird -> fly();

?>
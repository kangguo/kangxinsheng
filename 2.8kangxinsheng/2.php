<?php
//��װ�Ĳ���

class Pig{
	
	//protected $name = "С��";
	private $name = "С��";
	public $age = "10";
	public function fly(){
		
		return "���ڷ�";
	}
}
//ʵ����һ������

$bird = new Pig();

//echo $bird -> name;
echo $bird -> fly();
?>
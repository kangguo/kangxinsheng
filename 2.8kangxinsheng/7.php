<?php
//�̳еĲ���

class Bird{
	
	public $name="xiaobai";
	public function fly(){
		
		return "���ڷ�";
		
	}
}
class Pig extends Bird{
	
	public function fly(){
		//���ظ����еķ��� 
		echo parent::fly();
		return "����";
	}
}
$usb = new Pig();
echo $usb->fly();

?>
<?php
//this��Ӧ��


class Cat{
	
	public $name = "è";
	public $age = "3";
	
	public function tiao(){
		 $a = $this -> name;
		return "�����˵�".$a;
	}
	public function zhua(){
		echo $this -> tiao();
		return "ץ��������";
	}
}

$miao = new Cat();
echo $miao ->zhua();
?>
<?php
//this的应用


class Cat{
	
	public $name = "猫";
	public $age = "3";
	
	public function tiao(){
		 $a = $this -> name;
		return "将要跳走了的".$a;
	}
	public function zhua(){
		echo $this -> tiao();
		return "抓到了老鼠";
	}
}

$miao = new Cat();
echo $miao -> zhua();
?>
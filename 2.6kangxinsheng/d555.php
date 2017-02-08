<?php
header("Content-Type:text/html;charset=utf-8");

class Niao{
	
	public $name = "啄木鸟";
	public $age = "122";

	public function __construct(){
		
		echo "美丽大方的郭朝辉";
	}
	public function chi(){
		
		return "和".$this -> name ."在接吻";
		
	}
	public function guo9(){
		
		return "在玩耍！"
	}
	public function __destruct(){
		
		echo "真是没谁了!";
	}
}
$man = new Niao();
echo $man -> chi();
?>
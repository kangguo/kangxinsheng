<?php
header("Content-Type:text/html;charset=utf-8");

//抽象一个类

class Car{

	//成员属性
	public $name = "拖拉机";
	public $age = "30";

	//成员方法
	public function pao(){

		return "正在跑……";

	}

	public function biaoche(){

		return "正在飚……";

	}

}

class Person{

	public $yanjin = "眼睛";
	public $bizi = "鼻子";

	public function eat(){

		return "正在吃饭……";

	}

	public function shui(){

		return "正在睡觉……";

	}


}

//实例化两个相同的对象
$obj = new Person();
$obj2 = $obj;
var_dump($obj);
var_dump($obj2);

//实例化两个不同的对象
$obj1 = new Perso
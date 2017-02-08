<?php
//封装的操作

class Pig{
	
	//protected $name = "小白";
	private $name = "小白";
	private $age = "10";
	private function fly(){
		
		return "正在飞";
	}

//访问私有的成员属性
public function getName(){
	
	return $this -> name;
}
//修改私有成员属性的值
public function setName($name){
	
	$this -> name = $name;
	
}

//取得私有成员属性
public function __get($name){
	
	 return $this -> $name;
	
}
//修改私有属性的值
public function __set($name,$value){
	
	$this -> $name = $value;
}

//判断一个属性是否存在
	public function __isset($k){  
		
		return isset($this->$k);
		
	}
	//注销删除成员属性
	public function __unset($k){
		
		unset($this->$k);
		
	}
}
//实例化一个对象

/* $bird = new Dog();

echo $bird -> name;
echo $bird -> uname;
echo $bird -> fly(); */

$bird = new Pig();

/* $bird -> setName("小红");
echo $bird -> getName(); */

echo $bird -> name;
echo $bird -> age = "11";
var_dump(isset($bird->name)); //记得要复习
unset($bird->name);
echo $bird->name;
?>
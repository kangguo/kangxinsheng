<?php
//��װ�Ĳ���

class Pig{
	
	//protected $name = "С��";
	private $name = "С��";
	private $age = "10";
	private function fly(){
		
		return "���ڷ�";
	}

//����˽�еĳ�Ա����
public function getName(){
	
	return $this -> name;
}
//�޸�˽�г�Ա���Ե�ֵ
public function setName($name){
	
	$this -> name = $name;
	
}

//ȡ��˽�г�Ա����
public function __get($name){
	
	 return $this -> $name;
	
}
//�޸�˽�����Ե�ֵ
public function __set($name,$value){
	
	$this -> $name = $value;
}

//�ж�һ�������Ƿ����
	public function __isset($k){  
		
		return isset($this->$k);
		
	}
	//ע��ɾ����Ա����
	public function __unset($k){
		
		unset($this->$k);
		
	}
}
//ʵ����һ������

/* $bird = new Dog();

echo $bird -> name;
echo $bird -> uname;
echo $bird -> fly(); */

$bird = new Pig();

/* $bird -> setName("С��");
echo $bird -> getName(); */

echo $bird -> name;
echo $bird -> age = "11";
var_dump(isset($bird->name)); //�ǵ�Ҫ��ϰ
unset($bird->name);
echo $bird->name;
?>
<?php
header("Content-Type:text/html;charset=utf-8");

//����һ����

class Car{

	//��Ա����
	public $name = "������";
	public $age = "30";

	//��Ա����
	public function pao(){

		return "�����ܡ���";

	}

	public function biaoche(){

		return "����쮡���";

	}

}

class Person{

	public $yanjin = "�۾�";
	public $bizi = "����";

	public function eat(){

		return "���ڳԷ�����";

	}

}

//ʵ����������ͬ�Ķ���
$obj = new Person();
$obj2 = $obj;
var_dump($obj);
var_dump($obj2);

//ʵ����������ͬ�Ķ���
$obj1 = new Perso
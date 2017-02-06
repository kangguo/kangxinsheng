<?php
header("Content-Type:text/html;charset=utf-8");

//抽象一个类
//调用成员属性和成员方法
//修改成员属性的值
//调用成员方法添加参数


class Gou{
	
	public $name = "阿黄";
	public $age = "阿黄";
	public function benpao($dog){
		
		return $dog."正在奔跑.."; 
		
	}
}

$Dog = new Gou();
echo $Dog ->name;
echo "<br/>";
$Dog ->name="黑豹";
echo $Dog ->name;
echo "<br/>";
echo $Dog ->benpao("黑子");
?>
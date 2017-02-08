<?php
header("Content-Type:text/html;charset=utf-8");

class Mypro{
	public $root; 		//用户名
	public $pass;     	//密码
	public $ip; 		//连接的ip地址
	public $datebase;  //数据库名字
	public $con;
	
	//初始化类
	 public function __construct($root,$pass,$ip,$datebase){

		$this->root = $root;

		$this->pass = $pass;

		$this->ip = $ip;

		$this->datebase = $datebase;

		$this->connect(); 
		
	}

//连接数据库
	public function connect(){
		//第一步 连接数据库
		$this -> con = mysql_connect($this->ip,$this->root,$this->pass) or die("未连接");
		//第二步 选择一个数据库
		$dbname = mysql_select_db($this->datebase,$this -> con);
		//第三步 设置字符编码
		mysql_set_charset("utf8");
			

	}
//关闭数据库	
	public function close(){

		mysql_close($this -> con);

	}

//对mysql_query() mysql_fetch_array() mysql_num_rows()函数进行封装

	public function query($sql){

		return mysql_query($sql);

	}
	public function fetch($result){

		return mysql_fetch_array($result);

}

	public function rows($result){

			return mysql_num_rows($result);

	}

//增删改查方法
// 查询
	public function select($tableName,$arr){

		return $this->query("select * from $tableName $arr");

	}
//添加
	public function insert($tableName,$fields,$value){
		

		return $this->query("insert into $tableName $fields values $value");

	}
//修改

	public function update($tableName,$change,$arr){

    $this->query("update $tableName set $change $arr");

}
//删除
	public function del($tableName,$condition){

		$this->query("delect from $tableName $arr");

	}
	public function __destruct(){
		
		$this -> close();
	}

}
//对数据库操作类进行实例化
 $shuju = new Mypro("root","","127.0.0.1","demo");
 
 //var_dump($shuju);
 
 $shuju1 = "('".$_POST["name"]."',".$_POST["age"].")";
 echo $shuju -> insert("user","(name,age)",$shuju1);
	/* $shuju1 = "('asdfa',30)";
    echo $insert = $shuju->insert("user","(name,age)",$shuju1);
    */
	
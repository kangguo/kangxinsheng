<?php
header("Content-Type:text/html;charset=utf-8");

class Mypro{
	public $root; 		//�û���
	public $pass;     	//����
	public $ip; 		//���ӵ�ip��ַ
	public $datebase;  //���ݿ�����
	public $con;
	
	//��ʼ����
	 public function __construct($root,$pass,$ip,$datebase){

		$this->root = $root;

		$this->pass = $pass;

		$this->ip = $ip;

		$this->datebase = $datebase;

		$this->connect(); 
		
	}

//�������ݿ�
	public function connect(){
		//��һ�� �������ݿ�
		$this -> con = mysql_connect($this->ip,$this->root,$this->pass) or die("δ����");
		//�ڶ��� ѡ��һ�����ݿ�
		$dbname = mysql_select_db($this->datebase,$this -> con);
		//������ �����ַ�����
		mysql_set_charset("utf8");
			

	}
//�ر����ݿ�	
	public function close(){

		mysql_close($this -> con);

	}

//��mysql_query() mysql_fetch_array() mysql_num_rows()�������з�װ

	public function query($sql){

		return mysql_query($sql);

	}
	public function fetch($result){

		return mysql_fetch_array($result);

}

	public function rows($result){

			return mysql_num_rows($result);

	}

//��ɾ�Ĳ鷽��
// ��ѯ
	public function select($tableName,$arr){

		return $this->query("select * from $tableName $arr");

	}
//���
	public function insert($tableName,$fields,$value){
		

		return $this->query("insert into $tableName $fields values $value");

	}
//�޸�

	public function update($tableName,$change,$arr){

    $this->query("update $tableName set $change $arr");

}
//ɾ��
	public function del($tableName,$condition){

		$this->query("delect from $tableName $arr");

	}
	public function __destruct(){
		
		$this -> close();
	}

}
//�����ݿ���������ʵ����
 $shuju = new Mypro("root","","127.0.0.1","demo");
 
 //var_dump($shuju);
 
 $shuju1 = "('".$_POST["name"]."',".$_POST["age"].")";
 echo $shuju -> insert("user","(name,age)",$shuju1);
	/* $shuju1 = "('asdfa',30)";
    echo $insert = $shuju->insert("user","(name,age)",$shuju1);
    */
	
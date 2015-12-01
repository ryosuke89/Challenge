<?php

//�ۑ�3-6
//���ۃN���X
abstract class base{
  abstract protected function load();
  abstract public function show();
}

//Human�N���X
class Human extends base{
  private $table;
  private $query;
	private $pdo_object;
	private $row;

  //Human�N���X�F�f�[�^�擾�̊֐�
  public function load(){
		try{
			$pdo_object=
			new PDO('mysql:host=localhost;dbname=Challenge_db;charset=cp932','kato','kr890122');
		}catch(PDOException $Exception){
			die('�ڑ��Ɏ��s���܂����F'.$Exception->getMessage());
		}

		$query = $pdo_object->prepare("select * from $this->table");
		$query -> execute();
  }

  //Human�N���X�F�\���̊֐�
  public function show(){
		try{
			$pdo_object=
			new PDO('mysql:host=localhost;dbname=Challenge_db;charset=cp932','kato','kr890122');
		}catch(PDOException $Exception){
			die('�ڑ��Ɏ��s���܂����F'.$Exception->getMessage());
		}

		$query = $pdo_object->prepare("select * from $this->table");
		$query -> execute();

		while($row = $query->fetch(PDO::FETCH_OBJ)){
			echo $row->userID . "<br>";
			echo $row->name . "<br>";
			echo $row->tell . "<br>";
			echo $row->age . "<br>";
			echo $row->birthday . "<br>";
			echo $row->departmentID . "<br>";
			echo $row->stationID . "<br>" . "<br>";
		}
  }

  //Human�N���X�F����������
  public function __construct(){
    $this->table = 'user';
  }
}

//Station�N���X
class Station extends base{
  private $table;
  private $query;
	private $pdo_object;
	private $row;

  //Station�N���X�F�f�[�^�擾�̊֐�
  public function load(){
		try{
			$pdo_object=
			new PDO('mysql:host=localhost;dbname=Challenge_db;charset=cp932','kato','kr890122');
		}catch(PDOException $Exception){
			die('�ڑ��Ɏ��s���܂����F'.$Exception->getMessage());
		}

		$query = $pdo_object->prepare("select * from $this->table");
		$query -> execute();
  }

  //Station�N���X�F�\���̊֐�
  public function show(){
		try{
			$pdo_object=
			new PDO('mysql:host=localhost;dbname=Challenge_db;charset=cp932','kato','kr890122');
		}catch(PDOException $Exception){
			die('�ڑ��Ɏ��s���܂����F'.$Exception->getMessage());
		}

		$query = $pdo_object->prepare("select * from $this->table");
		$query -> execute();

		while($row = $query->fetch(PDO::FETCH_OBJ)){
			echo $row->stationID . "<br>";
			echo $row->stationName . "<br>";
		}
  }

  //Station�N���X�F����������
  public function __construct(){
    $this->table = 'station';
  }
}

$user = new Human();
$user->load();
$user->show();
$station = new Station();
$station->load();
$station->show();

$pdo_object = null;

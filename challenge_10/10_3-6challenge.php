<?php

//課題3-6
//抽象クラス
abstract class base{
  abstract protected function load();
  abstract public function show();
}

//Humanクラス
class Human extends base{
  private $table;
  private $query;
	private $pdo_object;
	private $row;

  //Humanクラス：データ取得の関数
  public function load(){
		try{
			$pdo_object=
			new PDO('mysql:host=localhost;dbname=Challenge_db;charset=cp932','kato','kr890122');
		}catch(PDOException $Exception){
			die('接続に失敗しました：'.$Exception->getMessage());
		}

		$query = $pdo_object->prepare("select * from $this->table");
		$query -> execute();
  }

  //Humanクラス：表示の関数
  public function show(){
		try{
			$pdo_object=
			new PDO('mysql:host=localhost;dbname=Challenge_db;charset=cp932','kato','kr890122');
		}catch(PDOException $Exception){
			die('接続に失敗しました：'.$Exception->getMessage());
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

  //Humanクラス：初期化処理
  public function __construct(){
    $this->table = 'user';
  }
}

//Stationクラス
class Station extends base{
  private $table;
  private $query;
	private $pdo_object;
	private $row;

  //Stationクラス：データ取得の関数
  public function load(){
		try{
			$pdo_object=
			new PDO('mysql:host=localhost;dbname=Challenge_db;charset=cp932','kato','kr890122');
		}catch(PDOException $Exception){
			die('接続に失敗しました：'.$Exception->getMessage());
		}

		$query = $pdo_object->prepare("select * from $this->table");
		$query -> execute();
  }

  //Stationクラス：表示の関数
  public function show(){
		try{
			$pdo_object=
			new PDO('mysql:host=localhost;dbname=Challenge_db;charset=cp932','kato','kr890122');
		}catch(PDOException $Exception){
			die('接続に失敗しました：'.$Exception->getMessage());
		}

		$query = $pdo_object->prepare("select * from $this->table");
		$query -> execute();

		while($row = $query->fetch(PDO::FETCH_OBJ)){
			echo $row->stationID . "<br>";
			echo $row->stationName . "<br>";
		}
  }

  //Stationクラス：初期化処理
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

<?php

try{
	$pdo_object=
	new PDO('mysql:host=localhost;dbname=Challenge_db;charset=cp932','kato','kr890122');
}catch(PDOException $Exception){
	die('接続に失敗しました：'.$Exception->getMessage());
}

$sql = "insert into profiles(profilesID,name,tell,age,birthday) value(:profilesID,:name,:tell,:age,:birthday)";
$query = $pdo_object->prepare($sql);

$query -> bindvalue(':profilesID',6);
$query -> bindvalue(':name','山田 太郎');
$query -> bindvalue(':tell','080-1234-5678');
$query -> bindvalue(':age',26);
$query -> bindvalue(':birthday','1989-02-22');

$query -> execute();

$pdo_object = null;
<?php

try{
	$pdo_object=
	new PDO('mysql:host=localhost;dbname=Challenge_db;charset=cp932','kato','kr890122');
}catch(PDOException $Exception){
	die('接続に失敗しました：'.$Exception->getMessage());
}

if(empty($_POST['profilesID'])){
	$profilesID = null;
}else{
	$profilesID = $_POST['profilesID'];
}

if(empty($_POST['name'])){
	$name = null;
}else{
	$name = $_POST['name'];
}

if(empty($_POST['tell'])){
	$tell = null;
}else{
	$tell = $_POST['tell'];
}

if(empty($_POST['age'])){
	$age = null;
}else{
	$age = $_POST['age'];
}

if(empty($_POST['birthday'])){
	$birthday = null;
}else{
	$birthday = $_POST['birthday'];
}

//ID
$sql_profilesID = "delete from profiles where profilesID=$profilesID";
$query_profilesID = $pdo_object->prepare($sql_profilesID);
if(empty($profilesID)){
}else{
	$query_profilesID -> execute();
}

//名前
$sql_name = "delete from profiles where name='$name'";
$query_name = $pdo_object->prepare($sql_name);
if(empty($name)){
}else{
	$query_name -> execute();
}

//電話番号
$sql_tell = "delete from profiles where tell='$tell'";
$query_tell = $pdo_object->prepare($sql_tell);
if(empty($tell)){
}else{
	$query_tell -> execute();
}

//年齢
$sql_age = "delete from profiles where age=$age";
$query_age = $pdo_object->prepare($sql_age);
if(empty($age)){
}else{
	$query_age -> execute();
}

//生年月日
$sql_birthday = "delete from profiles where birthday='$birthday'";
$query_birthday = $pdo_object->prepare($sql_birthday);
if(empty($birthday)){
}else{
	$query_birthday -> execute();
}

//全て表示
$sql = "select * from profiles";
$query = $pdo_object->prepare($sql);
$query -> execute();

while($row = $query->fetch(PDO::FETCH_OBJ)){
	echo $row->profilesID . "<br>";
	echo $row->name . "<br>";
	echo $row->tell . "<br>";
	echo $row->age . "<br>";
	echo $row->birthday . "<br>" . "<br>";
}

$pdo_object = null;
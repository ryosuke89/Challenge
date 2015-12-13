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
$sql_profilesID = "select * from profiles where profilesID=$profilesID";
$query_profilesID = $pdo_object->prepare($sql_profilesID);
if(empty($profilesID)){
}else{
	$query_profilesID -> execute();
}

while($row_profilesID = $query_profilesID->fetch(PDO::FETCH_OBJ)){
	echo $row_profilesID->profilesID . "<br>";
	echo $row_profilesID->name . "<br>";
	echo $row_profilesID->tell . "<br>";
	echo $row_profilesID->age . "<br>";
	echo $row_profilesID->birthday . "<br>" . "<br>";
}

//名前
$kensaku = "%{$name}%";
$sql_name = "select * from profiles where name like '$kensaku'";
$query_name = $pdo_object->prepare($sql_name);
if(empty($name)){
}else{
	$query_name -> execute();
}

while($row_name = $query_name->fetch(PDO::FETCH_OBJ)){
	echo $row_name->profilesID . "<br>";
	echo $row_name->name . "<br>";
	echo $row_name->tell . "<br>";
	echo $row_name->age . "<br>";
	echo $row_name->birthday . "<br>" . "<br>";
}

//電話番号
$sql_tell = "select * from profiles where tell='$tell'";
$query_tell = $pdo_object->prepare($sql_tell);
if(empty($tell)){
}else{
	$query_tell -> execute();
}

while($row_tell = $query_tell->fetch(PDO::FETCH_OBJ)){
	echo $row_tell->profilesID . "<br>";
	echo $row_tell->name . "<br>";
	echo $row_tell->tell . "<br>";
	echo $row_tell->age . "<br>";
	echo $row_tell->birthday . "<br>" . "<br>";
}

//年齢
$sql_age = "select * from profiles where age=$age";
$query_age = $pdo_object->prepare($sql_age);
if(empty($age)){
}else{
	$query_age -> execute();
}

while($row_age = $query_age->fetch(PDO::FETCH_OBJ)){
	echo $row_age->profilesID . "<br>";
	echo $row_age->name . "<br>";
	echo $row_age->tell . "<br>";
	echo $row_age->age . "<br>";
	echo $row_age->birthday . "<br>" . "<br>";
}

//生年月日
$sql_birthday = "select * from profiles where birthday='$birthday'";
$query_birthday = $pdo_object->prepare($sql_birthday);
if(empty($birthday)){
}else{
	$query_birthday -> execute();
}

while($row_birthday = $query_birthday->fetch(PDO::FETCH_OBJ)){
	echo $row_birthday->profilesID . "<br>";
	echo $row_birthday->name . "<br>";
	echo $row_birthday->tell . "<br>";
	echo $row_birthday->age . "<br>";
	echo $row_birthday->birthday . "<br>" . "<br>";
}

//全て表示
$sql = "select * from profiles";
$query = $pdo_object->prepare($sql);
if(empty($profilesID) && empty($name) && empty($tell) && empty($age) && empty($birthday)){
	$query -> execute();
}

while($row = $query->fetch(PDO::FETCH_OBJ)){
	echo $row->profilesID . "<br>";
	echo $row->name . "<br>";
	echo $row->tell . "<br>";
	echo $row->age . "<br>";
	echo $row->birthday . "<br>" . "<br>";
}

$pdo_object = null;
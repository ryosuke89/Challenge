<?php

try{
	$pdo_object=
	new PDO('mysql:host=localhost;dbname=Challenge_db;charset=cp932','kato','kr890122');
}catch(PDOException $Exception){
	die('�ڑ��Ɏ��s���܂����F'.$Exception->getMessage());
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

//�ǉ�
$sql_insert = "insert into profiles values($profilesID,'$name','$tell',$age,'$birthday')";
$query_insert = $pdo_object->prepare($sql_insert);
if(empty($profilesID) || empty($name) || empty($tell) || empty($age) || empty($birthday)){
	echo '�f�[�^��ǉ��ł��܂���ł���';
}else{
	$query_insert -> execute();
	echo '�ǉ������f�[�^�F' . "<br>" . "<br>";
}

//�\��
$sql = "select * from profiles where profilesID=$profilesID";
$query = $pdo_object->prepare($sql);
if(empty($profilesID) || empty($name) || empty($tell) || empty($age) || empty($birthday)){
}else{
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
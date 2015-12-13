<?php

try{
	$pdo_object=
	new PDO('mysql:host=localhost;dbname=Challenge_db;charset=cp932','kato','kr890122');
}catch(PDOException $Exception){
	die('接続に失敗しました：'.$Exception->getMessage());
}

if(empty($_POST['table'])){
	$table = null;
}else{
	$table = $_POST['table'];
}

if(empty($_POST['column1'])){
	$column1 = null;
}else{
	$column1 = $_POST['column1'];
}

if(empty($_POST['data1'])){
	$data1 = null;
}else{
	$data1 = $_POST['data1'];
}

if(empty($_POST['column2'])){
	$column2 = null;
}else{
	$column2 = $_POST['column2'];
}

if(empty($_POST['data2'])){
	$data2 = null;
}else{
	$data2 = $_POST['data2'];
}

if(empty($_POST['column3'])){
	$column3 = null;
}else{
	$column3 = $_POST['column3'];
}

if(empty($_POST['data3'])){
	$data3 = null;
}else{
	$data3 = $_POST['data3'];
}

if(empty($_POST['column4'])){
	$column4 = null;
}else{
	$column4 = $_POST['column4'];
}

if(empty($_POST['data4'])){
	$data4 = null;
}else{
	$data4 = $_POST['data4'];
}

if(empty($_POST['column5'])){
	$column5 = null;
}else{
	$column5 = $_POST['column5'];
}

if(empty($_POST['data5'])){
	$data5 = null;
}else{
	$data5 = $_POST['data5'];
}

$sql = "create table $table($column1 $data1,$column2 $data2,$column3 $data3,$column4 $data4,$column5 $data5)";
$query = $pdo_object->prepare($sql);
if(empty($table) || empty($column1) || empty($data1) || empty($column2) || empty($data2) || empty($column3) || empty($data3) || empty($column4) || empty($data4) || empty($column5) || empty($data5)){
	echo 'テーブルを作成できませんでした';
}else{
	$query -> execute();
	echo 'テーブルを作成しました';
}

$pdo_object = null;
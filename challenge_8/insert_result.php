<?php

require "dbaccessUtil.php";
session_start();

//セッション取得
if(empty($_SESSION['name'])){
	$name_i_r = null;
}else{
	$name_i_r = $_SESSION['name'];
}

if(empty($_SESSION['year'])){
	$year_i_r = null;
}else{
	$year_i_r = $_SESSION['year'];
}

if(empty($_SESSION['month'])){
	$month_i_r = null;
}else{
	$month_i_r = $_SESSION['month'];
}

if(empty($_SESSION['day'])){
	$day_i_r = null;
}else{
	$day_i_r = $_SESSION['day'];
}

if(empty($_SESSION['tell'])){
	$tell_i_r = null;
}else{
	$tell_i_r = $_SESSION['tell'];
}

if(empty($_SESSION['type'])){
	$type_i_r = null;
}else{
	$type_i_r = $_SESSION['type'];
}

if(empty($_SESSION['comment'])){
	$comment_i_r = null;
}else{
	$comment_i_r = $_SESSION['comment'];
}

$birthday_i_r = $year_i_r . '-' . $month_i_r . '-' . $day_i_r;
$newDate_i_r = date('Y-m-d H:i');

//登録
$sql_i_r = "insert into user_t values(null,:name,:birthday,:tell,:type,:comment,:newDate)";
$query_i_r = $pdo_object->prepare($sql_i_r);

$query_i_r -> bindvalue(':name',$name_i_r);
$query_i_r -> bindvalue(':birthday',$birthday_i_r);
$query_i_r -> bindvalue(':tell',$tell_i_r);
$query_i_r -> bindvalue(':type',$type_i_r);
$query_i_r -> bindvalue(':comment',$comment_i_r);
$query_i_r -> bindvalue(':newDate',$newDate_i_r);

if(empty($name_i_r) || empty($year_i_r) || empty($month_i_r) || empty($day_i_r) || empty($tell_i_r) || empty($type_i_r) || empty($comment_i_r)){
}else{
	$query_i_r -> execute();
}

//表示
$sql = "select * from user_t where name=:name and birthday=:birthday and tell=:tell and type=:type and comment=:comment and newDate=:newDate";
$query = $pdo_object->prepare($sql);

$query -> bindvalue(':name',$name_i_r);
$query -> bindvalue(':birthday',$birthday_i_r);
$query -> bindvalue(':tell',$tell_i_r);
$query -> bindvalue(':type',$type_i_r);
$query -> bindvalue(':comment',$comment_i_r);
$query -> bindvalue(':newDate',$newDate_i_r);

if(empty($name_i_r) || empty($year_i_r) || empty($month_i_r) || empty($day_i_r) || empty($tell_i_r) || empty($type_i_r) || empty($comment_i_r)){
}else{
	$query -> execute();
}

while($row = $query->fetch(PDO::FETCH_OBJ)){
	echo '名前：' . $row->name . "<br>";
	echo '生年月日：' . $row->birthday . "<br>";
	if($row->type == 1){
		echo '種別：エンジニア' . "<br>";
	}elseif($row->type == 2){
		echo '種別：営業' . "<br>";
	}
	echo '電話番号：' . $row->tell . "<br>";
	echo '自己紹介：' . $row->comment . "<br>" . "<br>";
	echo '以上の内容で登録しました。';
}

$pdo_object = null;

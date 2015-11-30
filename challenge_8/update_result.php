<?php

require "dbaccessUtil.php";

//POST取得
if(empty($_POST['name'])){
	$name_u = null;
}else{
	$name_u = $_POST['name'];
}

if(empty($_POST['year'])){
	$year_u = null;
}else{
	$year_u = $_POST['year'];
}

if(empty($_POST['month'])){
	$month_u = null;
}else{
	$month_u = $_POST['month'];
}

if(empty($_POST['day'])){
	$day_u = null;
}else{
	$day_u = $_POST['day'];
}

if(empty($_POST['tell'])){
	$tell_u = null;
}else{
	$tell_u = $_POST['tell'];
}

if(empty($_POST['type'])){
	$type_u = null;
}else{
	$type_u = $_POST['type'];
}

if(empty($_POST['comment'])){
	$comment_u = null;
}else{
	$comment_u = $_POST['comment'];
}

$birthday_u = $year_u . '-' . $month_u . '-' . $day_u;
$newDate_u = date('Y-m-d H:i');

//更新(IDが1の場合)
$sql_u = "update user_t set name=:name,birthday=:birthday,tell=:tell,type=:type,comment=:comment,newDate=:newDate where userID=1";
$query_u = $pdo_object->prepare($sql_u);

$query_u -> bindvalue(':name',$name_u);
$query_u -> bindvalue(':birthday',$birthday_u);
$query_u -> bindvalue(':tell',$tell_u);
$query_u -> bindvalue(':type',$type_u);
$query_u -> bindvalue(':comment',$comment_u);
$query_u -> bindvalue(':newDate',$newDate_u);

if(empty($name_u) || empty($birthday_u) || empty($tell_u) || empty($type_u) || empty($comment_u)){
}else{
	$query_u -> execute();
}

//表示(IDが1の場合)
$sql = "select * from user_t where userID=1";
$query = $pdo_object->prepare($sql);

$query -> bindvalue(':name',$name_u);

if(empty($name_u) || empty($birthday_u) || empty($tell_u) || empty($type_u) || empty($comment_u)){
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
	echo '以上の内容で更新しました。';
}

$pdo_object = null;

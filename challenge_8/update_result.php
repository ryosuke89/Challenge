<?php

require "dbaccessUtil.php";

//POST�擾
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

//�X�V(ID��1�̏ꍇ)
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

//�\��(ID��1�̏ꍇ)
$sql = "select * from user_t where userID=1";
$query = $pdo_object->prepare($sql);

$query -> bindvalue(':name',$name_u);

if(empty($name_u) || empty($birthday_u) || empty($tell_u) || empty($type_u) || empty($comment_u)){
}else{
	$query -> execute();
}

while($row = $query->fetch(PDO::FETCH_OBJ)){
	echo '���O�F' . $row->name . "<br>";
	echo '���N�����F' . $row->birthday . "<br>";
	if($row->type == 1){
		echo '��ʁF�G���W�j�A' . "<br>";
	}elseif($row->type == 2){
		echo '��ʁF�c��' . "<br>";
	}
	echo '�d�b�ԍ��F' . $row->tell . "<br>";
	echo '���ȏЉ�F' . $row->comment . "<br>" . "<br>";
	echo '�ȏ�̓��e�ōX�V���܂����B';
}

$pdo_object = null;

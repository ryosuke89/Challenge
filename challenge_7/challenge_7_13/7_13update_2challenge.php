<?php

try{
	$pdo_object=
	new PDO('mysql:host=localhost;dbname=Challenge_db;charset=cp932','kato','kr890122');
}catch(PDOException $Exception){
	die('�ڑ��Ɏ��s���܂����F'.$Exception->getMessage());
}

if(empty($_POST['column'])){
	$column = null;
}else{
	$column = $_POST['column'];
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

//�X�V
//ID��I�������ꍇ
$sql_profilesID = "update profiles set name='$name',tell='$tell',age=$age,birthday='$birthday' where profilesID=$profilesID";
if($column == 'ID'){
	$count_profilesID = $pdo_object->exec($sql_profilesID);
}

//���O��I�������ꍇ
$sql_name = "update profiles set profilesID=$profilesID,tell='$tell',age=$age,birthday='$birthday' where name='$name'";
if($column == '���O'){
	$count_name = $pdo_object->exec($sql_name);
}

//�d�b�ԍ���I�������ꍇ
$sql_tell = "update profiles set profilesID=$profilesID,name='$name',age=$age,birthday='$birthday' where tell='$tell'";
if($column == '�d�b�ԍ�'){
	$count_tell = $pdo_object->exec($sql_tell);
}

//�N���I�������ꍇ
$sql_age = "update profiles set profilesID=$profilesID,name='$name',tell='$tell',birthday='$birthday' where age=$age";
if($column == '�N��'){
	$count_age = $pdo_object->exec($sql_age);
}

//���N������I�������ꍇ
$sql_birthday = "update profiles set profilesID=$profilesID,name='$name',tell='$tell',age=$age, where birthday='$birthday";
if($column == '���N����'){
	$count_birthday = $pdo_object->exec($sql_birthday);
}

//�\��
$sql = "select * from profiles where profilesID=$profilesID";
$query = $pdo_object->prepare($sql);
if(empty($column) || empty($profilesID) || empty($name) || empty($tell) || empty($age) || empty($birthday) || $column == 'ID' && $count_profilesID == 0 || $column == '���O' && $count_name == 0 || $column == '�d�b�ԍ�' && $count_tell == 0 || $column == '�N��' && $count_age == 0 || $column == '���N����' && $count_birthday == 0){
	echo '�f�[�^���X�V�ł��܂���ł���';
}else{
	$query -> execute();
	echo '�X�V�����f�[�^�F' . "<br>" . "<br>";
}

while($row = $query->fetch(PDO::FETCH_OBJ)){
	echo $row->profilesID . "<br>";
	echo $row->name . "<br>";
	echo $row->tell . "<br>";
	echo $row->age . "<br>";
	echo $row->birthday . "<br>" . "<br>";
}

$pdo_object = null;
<?php

try{
	$pdo_object=
	new PDO('mysql:host=localhost;dbname=Challenge_db;charset=cp932','kato','kr890122');
}catch(PDOException $Exception){
	die('�ڑ��Ɏ��s���܂����F'.$Exception->getMessage());
}

//���R�[�h�̍폜
$sql_delete = "delete from profiles where name='�R�c ���Y'";
$query_delete = $pdo_object->prepare($sql_delete);
$query_delete -> execute();

//�\��
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
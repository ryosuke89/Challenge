<?php

try{
	$pdo_object=
	new PDO('mysql:host=localhost;dbname=Challenge_db;charset=cp932','kato','kr890122');
}catch(PDOException $Exception){
	die('�ڑ��Ɏ��s���܂����F'.$Exception->getMessage());
}

//�X�V
$sql_update = "update profiles set name='���� �C��',age=48,birthday='1967-11-06' where profilesID=1";
$query_update = $pdo_object->prepare($sql_update);
$query_update -> execute();

//�\��
$sql = "select * from profiles where profilesID=1";
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
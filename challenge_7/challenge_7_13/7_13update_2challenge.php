<?php

try{
	$pdo_object=
	new PDO('mysql:host=localhost;dbname=Challenge_db;charset=cp932','kato','kr890122');
}catch(PDOException $Exception){
	die('接続に失敗しました：'.$Exception->getMessage());
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

//更新
//IDを選択した場合
$sql_profilesID = "update profiles set name='$name',tell='$tell',age=$age,birthday='$birthday' where profilesID=$profilesID";
if($column == 'ID'){
	$count_profilesID = $pdo_object->exec($sql_profilesID);
}

//名前を選択した場合
$sql_name = "update profiles set profilesID=$profilesID,tell='$tell',age=$age,birthday='$birthday' where name='$name'";
if($column == '名前'){
	$count_name = $pdo_object->exec($sql_name);
}

//電話番号を選択した場合
$sql_tell = "update profiles set profilesID=$profilesID,name='$name',age=$age,birthday='$birthday' where tell='$tell'";
if($column == '電話番号'){
	$count_tell = $pdo_object->exec($sql_tell);
}

//年齢を選択した場合
$sql_age = "update profiles set profilesID=$profilesID,name='$name',tell='$tell',birthday='$birthday' where age=$age";
if($column == '年齢'){
	$count_age = $pdo_object->exec($sql_age);
}

//生年月日を選択した場合
$sql_birthday = "update profiles set profilesID=$profilesID,name='$name',tell='$tell',age=$age, where birthday='$birthday";
if($column == '生年月日'){
	$count_birthday = $pdo_object->exec($sql_birthday);
}

//表示
$sql = "select * from profiles where profilesID=$profilesID";
$query = $pdo_object->prepare($sql);
if(empty($column) || empty($profilesID) || empty($name) || empty($tell) || empty($age) || empty($birthday) || $column == 'ID' && $count_profilesID == 0 || $column == '名前' && $count_name == 0 || $column == '電話番号' && $count_tell == 0 || $column == '年齢' && $count_age == 0 || $column == '生年月日' && $count_birthday == 0){
	echo 'データを更新できませんでした';
}else{
	$query -> execute();
	echo '更新したデータ：' . "<br>" . "<br>";
}

while($row = $query->fetch(PDO::FETCH_OBJ)){
	echo $row->profilesID . "<br>";
	echo $row->name . "<br>";
	echo $row->tell . "<br>";
	echo $row->age . "<br>";
	echo $row->birthday . "<br>" . "<br>";
}

$pdo_object = null;
<html>
 <head>
 </head>
 <body>
  <form action="./7_12challenge.php" method="POST">
  ��������<br><br>
  ���O�F<br>
   <input type="text" name="name"><br><br>
  �N��F<br>
   <input type="text" name="age"><br><br>
  �a�����F<br>
   <input type="text" name="birthday"><br><br>
   <input type="submit" name="btnSubmit">
  </form>
 </body>
</html>

<?php

try{
	$pdo_object=
	new PDO('mysql:host=localhost;dbname=Challenge_db;charset=cp932','kato','kr890122');
}catch(PDOException $Exception){
	die('�ڑ��Ɏ��s���܂����F'.$Exception->getMessage());
}

if(empty($_POST['name'])){
	$name = null;
}else{
	$name = $_POST['name'];
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

//���O�̂ݓ��͂̏ꍇ�F����
$sql_name = "select * from profiles where name like :name";
$query_name = $pdo_object->prepare($sql_name);
$query_name -> bindValue(':name',"%$name%");
if(isset($name) && empty($age) && empty($birthday)){
	$query_name -> execute();
}

//���O�̂ݓ��͂̏ꍇ�F�\��
while($row_name = $query_name->fetch(PDO::FETCH_OBJ)){
	echo $row_name->profilesID . "<br>";
	echo $row_name->name . "<br>";
	echo $row_name->tell . "<br>";
	echo $row_name->age . "<br>";
	echo $row_name->birthday . "<br>" . "<br>";
}

//�N��̂ݓ��͂̏ꍇ�F����
$sql_age = "select * from profiles where age=:age";
$query_age = $pdo_object->prepare($sql_age);
$query_age -> bindValue(':age',$age);
if(empty($name) && isset($age) && empty($birthday)){
	$query_age -> execute();
}

//�N��̂ݓ��͂̏ꍇ�F�\��
while($row_age = $query_age->fetch(PDO::FETCH_OBJ)){
	echo $row_age->profilesID . "<br>";
	echo $row_age->name . "<br>";
	echo $row_age->tell . "<br>";
	echo $row_age->age . "<br>";
	echo $row_age->birthday . "<br>" . "<br>";
}

//�a�����̂ݓ��͂̏ꍇ�F����
$sql_birthday = "select * from profiles where birthday=:birthday";
$query_birthday = $pdo_object->prepare($sql_birthday);
$query_birthday -> bindValue(':birthday',$birthday);
if(empty($name) && empty($age) && isset($birthday)){
	$query_birthday -> execute();
}

//�a�����̂ݓ��͂̏ꍇ�F�\��
while($row_birthday = $query_birthday->fetch(PDO::FETCH_OBJ)){
	echo $row_birthday->profilesID . "<br>";
	echo $row_birthday->name . "<br>";
	echo $row_birthday->tell . "<br>";
	echo $row_birthday->age . "<br>";
	echo $row_birthday->birthday . "<br>" . "<br>";
}

//���O�ƔN����͂̏ꍇ�F����
$sql_name_age = "select * from profiles where name like :name and age=:age";
$query_name_age = $pdo_object->prepare($sql_name_age);
$query_name_age -> bindValue(':name',"%$name%");
$query_name_age -> bindValue(':age',$age);
if(isset($name) && isset($age) && empty($birthday)){
	$query_name_age -> execute();
}

//���O�ƔN����͂̏ꍇ�F�\��
while($row_name_age = $query_name_age->fetch(PDO::FETCH_OBJ)){
	echo $row_name_age->profilesID . "<br>";
	echo $row_name_age->name . "<br>";
	echo $row_name_age->tell . "<br>";
	echo $row_name_age->age . "<br>";
	echo $row_name_age->birthday . "<br>" . "<br>";
}

//���O�ƒa���������͂̏ꍇ�F����
$sql_name_birthday = "select * from profiles where name like :name and birthday=:birthday";
$query_name_birthday = $pdo_object->prepare($sql_name_birthday);
$query_name_birthday -> bindValue(':name',"%$name%");
$query_name_birthday -> bindValue(':birthday',$birthday);
if(isset($name) && empty($age) && isset($birthday)){
	$query_name_birthday -> execute();
}

//���O�ƒa���������͂̏ꍇ�F�\��
while($row_name_birthday = $query_name_birthday->fetch(PDO::FETCH_OBJ)){
	echo $row_name_birthday->profilesID . "<br>";
	echo $row_name_birthday->name . "<br>";
	echo $row_name_birthday->tell . "<br>";
	echo $row_name_birthday->age . "<br>";
	echo $row_name_birthday->birthday . "<br>" . "<br>";
}

//�N��ƒa���������͂̏ꍇ�F����
$sql_age_birthday = "select * from profiles where age=:age and birthday=:birthday";
$query_age_birthday = $pdo_object->prepare($sql_age_birthday);
$query_age_birthday -> bindValue(':age',$age);
$query_age_birthday -> bindValue(':birthday',$birthday);
if(empty($name) && isset($age) && isset($birthday)){
	$query_age_birthday -> execute();
}

//�N��ƒa���������͂̏ꍇ�F�\��
while($row_age_birthday = $query_age_birthday->fetch(PDO::FETCH_OBJ)){
	echo $row_age_birthday->profilesID . "<br>";
	echo $row_age_birthday->name . "<br>";
	echo $row_age_birthday->tell . "<br>";
	echo $row_age_birthday->age . "<br>";
	echo $row_age_birthday->birthday . "<br>" . "<br>";
}

//�S�ē��͂̏ꍇ�F����
$sql = "select * from profiles where name like :name and age=:age and birthday=:birthday";
$query = $pdo_object->prepare($sql);
$query -> bindValue(':name',"%$name%");
$query -> bindValue(':age',$age);
$query -> bindValue(':birthday',$birthday);
if(isset($name) && isset($age) && isset($birthday)){
	$query -> execute();
}

//�S�ē��͂̏ꍇ�F�\��
while($row = $query->fetch(PDO::FETCH_OBJ)){
	echo $row->profilesID . "<br>";
	echo $row->name . "<br>";
	echo $row->tell . "<br>";
	echo $row->age . "<br>";
	echo $row->birthday . "<br>" . "<br>";
}

$pdo_object = null;

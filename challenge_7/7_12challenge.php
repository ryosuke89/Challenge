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

//����
$kensaku = "%{$name}%";
$sql = "select * from profiles where name like '$kensaku' and age=$age and birthday='$birthday'";
$query = $pdo_object->prepare($sql);
$query -> execute();

//�\��
while($row = $query->fetch(PDO::FETCH_OBJ)){
		echo $row->profilesID . "<br>";
		echo $row->name . "<br>";
		echo $row->tell . "<br>";
		echo $row->age . "<br>";
		echo $row->birthday . "<br>" . "<br>";
}

$pdo_object = null;
<html>
 <head>
 </head>
 <body>
  <form action="./7_11challenge.php" method="POST">
  �f�[�^�̍X�V<br><br>
  �X�V����ID�F<br>
   <input type="text" name="profilesID"><br><br>
  ���O�F<br>
   <input type="text" name="name"><br><br>
  �d�b�ԍ��F<br>
   <input type="text" name="tell"><br><br>
  �N��F<br>
   <input type="text" name="age"><br><br>
  ���N�����F<br>
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

$sql = "update profiles set name='$name',tell='$tell',age=$age,birthday='$birthday' where profilesID=$profilesID";
$query = $pdo_object->prepare($sql);
$query -> execute();

$pdo_object = null;
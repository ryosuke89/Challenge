<html>
 <head>
 </head>
 <body>
  <form action="./7_9challenge.php" method="POST">
  データの追加<br><br>
  ID：<br>
   <input type="text" name="profilesID"><br><br>
  名前：<br>
   <input type="text" name="name"><br><br>
  電話番号：<br>
   <input type="text" name="tell"><br><br>
  年齢：<br>
   <input type="text" name="age"><br><br>
  生年月日：<br>
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
	die('接続に失敗しました：'.$Exception->getMessage());
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

$sql = "insert into profiles values($profilesID,'$name','$tell',$age,'$birthday')";
$query = $pdo_object->prepare($sql);
$query -> execute();

$pdo_object = null;
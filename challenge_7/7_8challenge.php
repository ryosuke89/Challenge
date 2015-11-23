<html>
 <head>
 </head>
 <body>
  <form action="./7_8challenge.php" method="POST">
  名前の検索<br><br>
  名前：<br>
   <input type="text" name="txtName">
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

if(empty($_POST['txtName'])){
	$textbox = null;
}else{
	$textbox = $_POST['txtName'];
}

$kensaku = "%{$textbox}%";
$sql = "select * from profiles where name like '$kensaku'";
$query = $pdo_object->prepare($sql);
$query -> execute();

if($textbox == null){
}else{
	while($row = $query->fetch(PDO::FETCH_OBJ)){
		echo $row->profilesID . "<br>";
		echo $row->name . "<br>";
		echo $row->tell . "<br>";
		echo $row->age . "<br>";
		echo $row->birthday . "<br>" . "<br>";
	}
}

$pdo_object = null;
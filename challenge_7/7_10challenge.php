<html>
 <head>
 </head>
 <body>
  <form action="./7_10challenge.php" method="POST">
  レコードの削除<br><br>
  ID：<br>
   <input type="text" name="profilesID"><br><br>
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

$sql = "delete from profiles where profilesID=$profilesID";
$query = $pdo_object->prepare($sql);
$query -> execute();

$pdo_object = null;
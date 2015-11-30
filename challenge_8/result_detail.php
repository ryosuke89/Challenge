<?php

require "dbaccessUtil.php";

//詳細情報の表示(IDが1の場合)
$sql = "select * from user_t where userID=1";
$query = $pdo_object->prepare($sql);
$query -> bindvalue(':userID',$userID_s);
$query -> execute();

while($row = $query->fetch(PDO::FETCH_OBJ)){
	echo '詳細情報' . "<br>" . "<br>";
	echo 'ユーザーID：' . $row->userID . "<br>";
	echo '名前：' . $row->name . "<br>";
	echo '生年月日：' . $row->birthday . "<br>";
	if($row->type == 1){
		echo '種別：エンジニア' . "<br>";
	}elseif($row->type == 2){
		echo '種別：営業' . "<br>";
	}
	echo '電話番号：' . $row->tell . "<br>";
	echo '自己紹介：' . $row->comment . "<br>";
	echo '登録日：' . $row->newDate . "<br>" . "<br>";
}

$pdo_object = null;

?>
<a href="update.php">変更</a>　　
<a href="delete.php">削除</a>

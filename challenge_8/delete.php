<?php

require "dbaccessUtil.php";

//表示(IDが1の場合)
$sql = "select * from user_t where userID=1";
$query = $pdo_object->prepare($sql);
$query -> execute();

while($row = $query->fetch(PDO::FETCH_OBJ)){
	echo '詳細情報' . "<br>" . "<br>";
	echo '名前：' . $row->name . "<br>";
	echo '生年月日：' . $row->birthday . "<br>";
	if($row->type == 1){
		echo '種別：エンジニア' . "<br>";
	}elseif($row->type == 2){
		echo '種別：営業' . "<br>";
	}
	echo '電話番号：' . $row->tell . "<br>";
	echo '自己紹介：' . $row->comment . "<br>" . "<br>";
	echo 'このレコードを本当に削除しますか？' . "<br>" . "<br>";
}

$pdo_object = null;

?>
<a href="delete_result.php">はい</a>　　
<a href="index.php">いいえ</a>

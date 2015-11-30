<?php

require "dbaccessUtil.php";

//GET取得
if(empty($_GET['name'])){
	$name_s = null;
}else{
	$name_s = $_GET['name'];
}

if(empty($_GET['birthday'])){
	$birthday_s = null;
}else{
	$birthday_s = $_GET['birthday'];
}

if(empty($_GET['type'])){
	$type_s = null;
}else{
	$type_s = $_GET['type'];
}

//入力がない場合：検索
$sql = "select * from user_t";
$query = $pdo_object->prepare($sql);

if(empty($name_s) && empty($birthday_s) && empty($type_s)){
	$query -> execute();
}

//入力がない場合：全件表示
echo "<table border=\"1\">";
echo "<tr><th>名前</th><th>生年</th><th>種別</th><th>登録日</th></tr>";

while($row = $query->fetch(PDO::FETCH_OBJ)){
	?><td><a href="result_detail.php"><?php echo $row->name;?></a></td><br><?php
	echo "<td>" . date('Y', strtotime($row->birthday)) . '年' . "</td>";
	if($row->type == 1){
		echo "<td>" .  'エンジニア' . "</td>";
	}elseif($row->type == 2){
		echo "<td>" .  '営業' . "</td>";
	}
	echo "<td>" . $row->newDate . "</td>";
	echo "</tr>";
}
echo "</table>";

$pdo_object = null;

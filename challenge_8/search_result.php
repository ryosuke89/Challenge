<?php

require "dbaccessUtil.php";

//GET�擾
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

//���͂��Ȃ��ꍇ�F����
$sql = "select * from user_t";
$query = $pdo_object->prepare($sql);

if(empty($name_s) && empty($birthday_s) && empty($type_s)){
	$query -> execute();
}

//���͂��Ȃ��ꍇ�F�S���\��
echo "<table border=\"1\">";
echo "<tr><th>���O</th><th>���N</th><th>���</th><th>�o�^��</th></tr>";

while($row = $query->fetch(PDO::FETCH_OBJ)){
	?><td><a href="result_detail.php"><?php echo $row->name;?></a></td><br><?php
	echo "<td>" . date('Y', strtotime($row->birthday)) . '�N' . "</td>";
	if($row->type == 1){
		echo "<td>" .  '�G���W�j�A' . "</td>";
	}elseif($row->type == 2){
		echo "<td>" .  '�c��' . "</td>";
	}
	echo "<td>" . $row->newDate . "</td>";
	echo "</tr>";
}
echo "</table>";

$pdo_object = null;

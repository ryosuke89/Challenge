<?php

require "dbaccessUtil.php";

//�\��(ID��1�̏ꍇ)
$sql = "select * from user_t where userID=1";
$query = $pdo_object->prepare($sql);
$query -> execute();

while($row = $query->fetch(PDO::FETCH_OBJ)){
	echo '�ڍ׏��' . "<br>" . "<br>";
	echo '���O�F' . $row->name . "<br>";
	echo '���N�����F' . $row->birthday . "<br>";
	if($row->type == 1){
		echo '��ʁF�G���W�j�A' . "<br>";
	}elseif($row->type == 2){
		echo '��ʁF�c��' . "<br>";
	}
	echo '�d�b�ԍ��F' . $row->tell . "<br>";
	echo '���ȏЉ�F' . $row->comment . "<br>" . "<br>";
	echo '���̃��R�[�h��{���ɍ폜���܂����H' . "<br>" . "<br>";
}

$pdo_object = null;

?>
<a href="delete_result.php">�͂�</a>�@�@
<a href="index.php">������</a>

<?php

require "dbaccessUtil.php";

//�ڍ׏��̕\��(ID��1�̏ꍇ)
$sql = "select * from user_t where userID=1";
$query = $pdo_object->prepare($sql);
$query -> bindvalue(':userID',$userID_s);
$query -> execute();

while($row = $query->fetch(PDO::FETCH_OBJ)){
	echo '�ڍ׏��' . "<br>" . "<br>";
	echo '���[�U�[ID�F' . $row->userID . "<br>";
	echo '���O�F' . $row->name . "<br>";
	echo '���N�����F' . $row->birthday . "<br>";
	if($row->type == 1){
		echo '��ʁF�G���W�j�A' . "<br>";
	}elseif($row->type == 2){
		echo '��ʁF�c��' . "<br>";
	}
	echo '�d�b�ԍ��F' . $row->tell . "<br>";
	echo '���ȏЉ�F' . $row->comment . "<br>";
	echo '�o�^���F' . $row->newDate . "<br>" . "<br>";
}

$pdo_object = null;

?>
<a href="update.php">�ύX</a>�@�@
<a href="delete.php">�폜</a>

<?php

session_start();

//POST�擾
if(empty($_POST['name'])){
	$_SESSION['name'] = null;
}else{
	$_SESSION['name'] = $_POST['name'];
	$name_i = $_SESSION['name'];
}

if(empty($_POST['year'])){
	$_SESSION['year'] = null;
}else{
	$_SESSION['year'] = $_POST['year'];
	$year_i = $_SESSION['year'];
}

if(empty($_POST['month'])){
	$_SESSION['month'] = null;
}else{
	$_SESSION['month'] = $_POST['month'];
	$month_i = $_SESSION['month'];
}

if(empty($_POST['day'])){
	$_SESSION['day'] = null;
}else{
	$_SESSION['day'] = $_POST['day'];
	$day_i = $_SESSION['day'];
}

if(empty($_POST['tell'])){
	$_SESSION['tell'] = null;
}else{
	$_SESSION['tell'] = $_POST['tell'];
	$tell_i = $_SESSION['tell'];
}

if(empty($_POST['type'])){
	$_SESSION['type'] = null;
}else{
	$_SESSION['type'] = $_POST['type'];
	$type_i = $_SESSION['type'];
}

if(empty($_POST['comment'])){
	$_SESSION['comment'] = null;
}else{
	$_SESSION['comment'] = $_POST['comment'];
	$comment_i = $_SESSION['comment'];
}

if(empty($name_i)){
	echo '���O�����͂���Ă��܂���B' . "<br>";
}

if(empty($year_i) || empty($month_i) || empty($day_i)){
	echo '���N�������I������Ă��܂���B' . "<br>";
}

if(empty($type_i)){
	echo '��ʂ��I������Ă��܂���B' . "<br>";
}

if(empty($tell_i)){
	echo '�d�b�ԍ������͂���Ă��܂���B' . "<br>";
}

if(empty($comment_i)){
	echo '���ȏЉ���͂���Ă��܂���B' . "<br>" . "<br>";
}

if(empty($name_i) || empty($year_i) || empty($month_i) || empty($day_i) || empty($type_i) || empty($tell_i) || empty($comment_i)){
?>
	<a href="insert.php">�߂�</a>
<?php
}else{
	echo '�m�F���' . "<br>" . "<br>";
	echo '���O�F' . $name_i . "<br>";
	echo '���N�����F' . $year_i . '�N' . $month_i . '��' . $day_i . '��' . "<br>";
	if($type_i == 1){
		echo '��ʁF�G���W�j�A' . "<br>";
	}elseif($type_i == 2){
		echo '��ʁF�c��' . "<br>";
	}
	echo '�d�b�ԍ��F' . $tell_i . "<br>";
	echo '���ȏЉ�F' . $comment_i . "<br>" . "<br>";
	echo '��L�̓��e�œo�^�������܂��B��낵���ł����H' . "<br>" . "<br>";
?>
<a href="insert_result.php">�͂�</a>�@
<a href="insert.php">������</a>
<?php
}
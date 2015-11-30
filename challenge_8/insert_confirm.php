<?php

session_start();

//POST取得
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
	echo '名前が入力されていません。' . "<br>";
}

if(empty($year_i) || empty($month_i) || empty($day_i)){
	echo '生年月日が選択されていません。' . "<br>";
}

if(empty($type_i)){
	echo '種別が選択されていません。' . "<br>";
}

if(empty($tell_i)){
	echo '電話番号が入力されていません。' . "<br>";
}

if(empty($comment_i)){
	echo '自己紹介が入力されていません。' . "<br>" . "<br>";
}

if(empty($name_i) || empty($year_i) || empty($month_i) || empty($day_i) || empty($type_i) || empty($tell_i) || empty($comment_i)){
?>
	<a href="insert.php">戻る</a>
<?php
}else{
	echo '確認画面' . "<br>" . "<br>";
	echo '名前：' . $name_i . "<br>";
	echo '生年月日：' . $year_i . '年' . $month_i . '月' . $day_i . '日' . "<br>";
	if($type_i == 1){
		echo '種別：エンジニア' . "<br>";
	}elseif($type_i == 2){
		echo '種別：営業' . "<br>";
	}
	echo '電話番号：' . $tell_i . "<br>";
	echo '自己紹介：' . $comment_i . "<br>" . "<br>";
	echo '上記の内容で登録いたします。よろしいですか？' . "<br>" . "<br>";
?>
<a href="insert_result.php">はい</a>　
<a href="insert.php">いいえ</a>
<?php
}
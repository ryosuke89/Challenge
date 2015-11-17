<?php

session_start();

//初回アクセスまたは前回アクセス日時の表示
if(empty($_SESSION['LastLoginDate'])){
	echo '初回アクセスです。';
}else{
	echo '前回アクセス日時：' . $_SESSION['LastLoginDate'];
}

//現在時刻の記録
$access_time = date('Y-m-d H:i:s');
$_SESSION['LastLoginDate'] = $access_time;
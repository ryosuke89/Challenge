<?php

//初回アクセスまたは前回アクセス日時の表示
if(empty($_COOKIE['LastLoginDate'])){
	echo '初回アクセスです。';
}else{
	echo '前回アクセス日時：' . $_COOKIE['LastLoginDate'];
}

//現在時刻の記録
$access_time = date('Y-m-d H:i:s');
setcookie('LastLoginDate', $access_time);
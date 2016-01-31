<?php

function show_data($id){
	$suzuki = array(1, '鈴木', '平成2年2月2日', '東京都');
	$sato = array(2, '佐藤', '平成3年3月3日', null);
	$yamada = array(3, '山田', '平成4年4月4日', '千葉県');

		$member = array($suzuki, $sato, $yamada);
		return $member[$id - 1];
}

$limit = 2;
$array = array(1, 2, 3);
foreach($array as $id){
	$array_data = show_data($id);
	foreach($array_data as $key => $value){
		if($key == 0 || $value == null){
			continue;
		}
		echo "$value <br>";
	}
	if($id == $limit){
		break;
	}
}

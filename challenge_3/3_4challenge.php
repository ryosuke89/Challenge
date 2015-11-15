<?php

function my_profile(){
	echo "私の名前は加藤良介です<br>";
	echo "生年月日は平成1年1月22日です<br>";
	echo "趣味はバドミントンです<br>";
		$profile = true;
		return $profile;
}

$result = my_profile();

if ($result == true) {
	echo 'この処理は正しく実行できました';
} else {
	echo '正しく実行できませんでした';
}
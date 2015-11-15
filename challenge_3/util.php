<?php

//課題1のユーザー定義
function my_profile(){
	echo "私の名前は加藤良介です<br>";
	echo "生年月日は平成1年1月22日です<br>";
	echo "趣味はバドミントンです<br>";
}

//課題2のユーザー定義
function num_hanbetsu($num){
	if ($num % 2 == 0) {
		echo '偶数';
	} else {
		echo '奇数';
	}
}
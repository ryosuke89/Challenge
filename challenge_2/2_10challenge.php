<?php

//課題10
//GETの取得
$param = $_GET['param'];

//元の値
echo '元の値：<br>' . $param . "<br>";

//カウント用
$count_two = 0;
$count_three = 0;
$count_five = 0;
$count_seven = 0;

//2で割った数をカウント
$key = $param;
while ($key % 2 == 0) {
    $key = $key / 2;
    $count_two++;
}

//3で割った数をカウント
while ($key % 3 == 0) {
    $key = $key / 3;
    $count_three++;
}

//5で割った数をカウント
while ($key % 5 == 0) {
    $key = $key / 5;
    $count_five++;
}

//7で割った数をカウント
while ($key % 7 == 0) {
    $key = $key / 7;
    $count_seven++;
}

//素因数分解の結果
if($count_two > 0 || $count_three > 0 || $count_five > 0 || $count_seven > 0){
    echo '<br>1ケタの素因数：<br>';
}
if($count_two > 0){
    echo '2の' . $count_two . '乗<br>';
}
if($count_three > 0){
    echo '3の' . $count_three . '乗<br>';
}
if($count_five > 0){
    echo '5の' . $count_five . '乗<br>';
}
if($count_seven > 0){
    echo '7の' . $count_seven . '乗<br>';
}

//割り切れなかった数
if($key > 1){
    echo '<br>その他：<br>' . $key;
}

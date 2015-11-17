<?php

//開始
$kaishi = date('Y-m-d H:i:s');
$fp = fopen('kansuu.txt', 'w');
fwrite($fp, "$kaishi" . ' 開始' . "\r\n");
fclose($fp);

//使用する関数：array_replace
$data = array(1, 2, 3, 4);
$henkan = array(0 => 'a', 2 => 'c');
$replace = array_replace($data, $henkan);

echo $replace[0] ."<br>";
echo $replace[1] ."<br>";
echo $replace[2] ."<br>";
echo $replace[3] ."<br>";

//終了
$syuryo = date('Y-m-d H:i:s');
$fp = fopen('kansuu.txt', 'a');
fwrite($fp, "$syuryo" . ' 終了');
fclose($fp);

//読み込み
$fp = fopen('kansuu.txt', 'r');
while ($file_txt = fgets($fp)) {
	echo $file_txt . "<br>";
}
fclose($fp);
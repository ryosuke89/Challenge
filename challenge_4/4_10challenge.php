<?php

//�J�n
$kaishi = date('Y-m-d H:i:s');
$fp = fopen('kansuu.txt', 'w');
fwrite($fp, "$kaishi" . ' �J�n' . "\r\n");
fclose($fp);

//�g�p����֐��Farray_replace
$data = array(1, 2, 3, 4);
$henkan = array(0 => 'a', 2 => 'c');
$replace = array_replace($data, $henkan);

echo $replace[0] ."<br>";
echo $replace[1] ."<br>";
echo $replace[2] ."<br>";
echo $replace[3] ."<br>";

//�I��
$syuryo = date('Y-m-d H:i:s');
$fp = fopen('kansuu.txt', 'a');
fwrite($fp, "$syuryo" . ' �I��');
fclose($fp);

//�ǂݍ���
$fp = fopen('kansuu.txt', 'r');
while ($file_txt = fgets($fp)) {
	echo $file_txt . "<br>";
}
fclose($fp);
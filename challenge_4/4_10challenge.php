<?php

//�J�n
$kaishi = date('Y-m-d H:i:s');
$fp = fopen('kansuu.txt', 'w');
fwrite($fp, "$kaishi" . ' �J�n ');
fclose($fp);

//�g�p����֐��Farray_replace
$data = array('a', 'b', 'c', 'd');
$henkan = array(0 => 1, 3 => 3);
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
$file_txt = fgets($fp);
fclose($fp);
echo $file_txt;
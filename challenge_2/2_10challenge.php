<?php

//�ۑ�10
$param = $_GET['param'];

//���̒l
echo $param . "<br>";

//�f���������̌���
$key = $param;
while ($key % 2 == 0 && $key > 2) {
  switch($key) {
     case $key:
       $key = $key / 2 . ',';
       echo 2 . ',';
       break;
  }
}

while ($key % 3 == 0 && $key > 3) {
  switch($key) {
     case $key:
       $key = $key / 3 . ',';
       echo 3 . ',';
       break;
  }
}

while ($key % 5 == 0 && $key > 5) {
  switch($key) {
     case $key:
       $key = $key / 5 . ',';
       echo 5 . ',';
       break;
  }
}

while ($key % 7 == 0 && $key > 7) {
  switch($key) {
     case $key:
       $key = $key / 7 . ',';
       echo 7 . ',';
       break;
  }
}

echo $key . "<br>";

//���̑�
if ($key >= 10) {
       echo '���̒l1�P�^�̑f�������̑�';
}
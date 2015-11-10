<?php

//課題10
$param = $_GET['param'];

//元の値
echo $param . "<br>";

//素因数分解の結果
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

//その他
if ($key >= 10) {
       echo '元の値1ケタの素因数その他';
}
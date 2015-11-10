<?php

//‰Û‘è1
$num = 1;
switch($num) {
   case 1:
      echo 'one';
      break;
   case 2:
      echo 'two';
      break;
   default:
      echo '‘z’èŠO';
      break;
}

echo "<br>";

//‰Û‘è2
$num = 'A';
switch($num) {
   case 'A':
      echo '‰pŒê';
      break;
   case '‚ ':
      echo '“ú–{Œê';
      break;
}

echo "<br>";

//‰Û‘è3
$kakeru = 8;
for($i=1; $i<20; $i++) {
   $kakeru = $kakeru * 8;
}
echo $kakeru . "<br>";

//‰Û‘è4
$moji = 'A';
for($i=0; $i<30; $i++) {
   echo $moji = $moji . 'A';
}

echo "<br>";

//‰Û‘è5
$sum = 0;
for($i=0; $i<=100; $i++) {
   $sum = $sum + $i;
}
echo $sum . "<br>";

//‰Û‘è6
$key = 1000;
while ($key > 100 ) {
  switch($key) {
     case $key:
       echo $key = $key / 2 . ',';
       break;
  }
}

echo "<br>";

//‰Û‘è7
$arr = array(10, 100, 'soeda', 'hayashi', -20, 118, 'END');

//‰Û‘è8
$arr[2] = 33;

//‰Û‘è9
$arr = array(
             1 => 'AAA',
             'hello' => 'world',
             'soeda' => 33,
             20 => 20,
       );
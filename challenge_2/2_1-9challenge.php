<?php

//�ۑ�1
$num = 1;
switch($num) {
    case 1:
        echo 'one';
        break;
    case 2:
        echo 'two';
        break;
    default:
        echo '�z��O';
        break;
}

echo "<br>";

//�ۑ�2
$num = 'A';
switch($num) {
    case 'A':
        echo '�p��';
        break;
    case '��':
        echo '���{��';
        break;
}
echo "<br>";

//�ۑ�3
$kakeru = 8;
for($i=1; $i<20; $i++) {
    $kakeru = $kakeru * 8;
}
echo $kakeru . "<br>";

//�ۑ�4
$moji = 'A';
for($i=0; $i<29; $i++) {
    $moji = $moji . 'A';
}
echo $moji . "<br>";

//�ۑ�5
$sum = 0;
for($i=0; $i<=100; $i++) {
    $sum = $sum + $i;
}
echo $sum . "<br>";

//�ۑ�6
$waru = 1000;
while ($waru >= 100 ) {
    echo $waru = $waru / 2 . ',';
}
echo "<br>";

//�ۑ�7
$arr = array(10, 100, 'soeda', 'hayashi', -20, 118, 'END');

//�ۑ�8
$arr[2] = 33;

//�ۑ�9
$arr = array(
             1 => 'AAA',
             'hello' => 'world',
             'soeda' => 33,
             20 => 20,
       );

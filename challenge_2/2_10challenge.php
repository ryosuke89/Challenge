<?php

//�ۑ�10
//GET�̎擾
$param = $_GET['param'];

//���̒l
echo '���̒l�F<br>' . $param . "<br>";

//�J�E���g�p
$count_two = 0;
$count_three = 0;
$count_five = 0;
$count_seven = 0;

//2�Ŋ����������J�E���g
$key = $param;
while ($key % 2 == 0) {
    $key = $key / 2;
    $count_two++;
}

//3�Ŋ����������J�E���g
while ($key % 3 == 0) {
    $key = $key / 3;
    $count_three++;
}

//5�Ŋ����������J�E���g
while ($key % 5 == 0) {
    $key = $key / 5;
    $count_five++;
}

//7�Ŋ����������J�E���g
while ($key % 7 == 0) {
    $key = $key / 7;
    $count_seven++;
}

//�f���������̌���
if($count_two > 0 || $count_three > 0 || $count_five > 0 || $count_seven > 0){
    echo '<br>1�P�^�̑f�����F<br>';
}
if($count_two > 0){
    echo '2��' . $count_two . '��<br>';
}
if($count_three > 0){
    echo '3��' . $count_three . '��<br>';
}
if($count_five > 0){
    echo '5��' . $count_five . '��<br>';
}
if($count_seven > 0){
    echo '7��' . $count_seven . '��<br>';
}

//����؂�Ȃ�������
if($key > 1){
    echo '<br>���̑��F<br>' . $key;
}

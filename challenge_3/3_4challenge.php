<?php

function my_profile(){
	echo "���̖��O�͉����ǉ�ł�<br>";
	echo "���N�����͕���1�N1��22���ł�<br>";
	echo "��̓o�h�~���g���ł�<br>";
		$profile = true;
		return $profile;
}

$result = my_profile();

if ($result == true) {
	echo '���̏����͐��������s�ł��܂���';
} else {
	echo '���������s�ł��܂���ł���';
}
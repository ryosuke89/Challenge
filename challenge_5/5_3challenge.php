<?php

//����A�N�Z�X�܂��͑O��A�N�Z�X�����̕\��
if(empty($_COOKIE['LastLoginDate'])){
	echo '����A�N�Z�X�ł��B';
}else{
	echo '�O��A�N�Z�X�����F' . $_COOKIE['LastLoginDate'];
}

//���ݎ����̋L�^
$access_time = date('Y-m-d H:i:s');
setcookie('LastLoginDate', $access_time);
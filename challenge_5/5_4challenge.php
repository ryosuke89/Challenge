<?php

session_start();

//����A�N�Z�X�܂��͑O��A�N�Z�X�����̕\��
if(empty($_SESSION['LastLoginDate'])){
	echo '����A�N�Z�X�ł��B';
}else{
	echo '�O��A�N�Z�X�����F' . $_SESSION['LastLoginDate'];
}

//���ݎ����̋L�^
$access_time = date('Y-m-d H:i:s');
$_SESSION['LastLoginDate'] = $access_time;
<?php

function num_hanbetsu($num){
	if ($num % 2 == 0) {
		echo '����';
	} else {
		echo '�';
	}
}

//����
num_hanbetsu(10);
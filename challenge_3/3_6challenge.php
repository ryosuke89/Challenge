<?php

function show_data($id){
	$suzuki = array(1, '���', '����2�N2��2��', '�����s');
	$sato = array(2, '����', '����3�N3��3��', '��ʌ�');
	$yamada = array(3, '�R�c', '����4�N4��4��', '��t��');

		$member = array($suzuki, $sato, $yamada);
		return $member[$id - 1];
}

$results = show_data(1);
foreach($results as $key => $value){
	if($key == 0){
		continue;
	}
	echo "$value <br>";
}
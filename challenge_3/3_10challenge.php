<?php

function show_data($id){
	$suzuki = array(1, '���', '����2�N2��2��', '�����s');
	$sato = array(2, '����', '����3�N3��3��', null);
	$yamada = array(3, '�R�c', '����4�N4��4��', '��t��');

		$member = array($suzuki, $sato, $yamada);
		return $member[$id - 1];
}

$limit = 2;
$array = array(1, 2, 3);
foreach($array as $id){
	$array_data = show_data($id);
	foreach($array_data as $key => $value){
		if($key == 0 || $value == null){
			continue;
		}
		echo "$value <br>";
	}
	if($id == $limit){
		break;
	}
}

<?php

function show_data(){
	$id=1; $name='���'; $birthday='����2�N2��2��'; $address='�����s';
		return array($id, $name, $birthday, $address);
}

$results = show_data();
foreach($results as $key => $value){
	if ($key == 0){
	continue;
	}
	echo "$value <br>";
}
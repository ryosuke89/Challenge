<?php

function show_data(){
	$id=1; $name='鈴木'; $birthday='平成2年2月2日'; $address='東京都';
		return array($id, $name, $birthday, $address);
}

$results = show_data();
foreach($results as $key => $value){
	if ($key == 0){
	continue;
	}
	echo "$value <br>";
}
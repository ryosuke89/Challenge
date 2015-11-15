<?php

function show_data(){
	$id=1; $name='—é–Ø'; $birthday='•½¬2”N2ŒŽ2“ú'; $address='“Œ‹ž“s';
		return array($id, $name, $birthday, $address);
}

$results = show_data();
foreach($results as $key => $value){
	if ($key == 0){
	continue;
	}
	echo "$value <br>";
}
<?php

function calc($num1, $num2 = 5, $type = false){

	$result_mult = $num1 * $num2;
	$result_ruijyo = $result_mult * $result_mult;

	if($type == false){
		echo $result_mult;
	}else{
		echo $result_ruijyo;
	}

	$results = array($result_mult, $result_ruijyo);
	return $results;
}

$calc_results = calc(3, 5, false);






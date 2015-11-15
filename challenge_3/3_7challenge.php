<?php

$global_number=3;

	function check_scope(){
		static $local_number=1;
		global $global_number;
		$global_number = $global_number * 2;
		echo $global_number . "<br>";
		$local_number+=1;
	}

for($i=0; $i<20; $i++){
	echo check_scope();
}
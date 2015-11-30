<?php

class User{
	public $userID;
	public $age;
	public function setUser($userID, $age){
		$this->userID = $userID;
		$this->age = $age;
	}
	public function echo_hensuu(){
		echo $this->userID;
		echo $this->age;
	}
}

class Hensuu extends User{
	public function clear_hensuu(){
		$this->userID = null;
		$this->age = null;
	}
}

$suzuki = new Hensuu();
$suzuki->clear_hensuu();

<?php

function ValidasiUsername($user){

	$valid_user = preg_match("/^[a-z]*$/", $user);

	if ($valid_user && strlen($user)==8) {

		echo "true <br/>";

	}else{

		echo "false <br/>";

	}

}

function ValidasiPassword($pass){

	$valid_pass = preg_match("/^[a-z || A-Z || 0-9 || @_.=,|+()*&^%$#!'\/-]*$/", $pass);

	if ($valid_pass && strlen($pass)) {

		echo "true <br/>";

	}else{

		echo "false <br/>";

	}

}

ValidasiUsername("zeronull");

ValidasiPassword("kamu@aku.com")

?>


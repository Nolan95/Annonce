<?php

	function debug($variable){

		echo '<pre>' . print_r($variable, true) . '</pre>';

	}

	function str_random($length){

		$alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPMLKJHGFDSQWXCVBN";

		return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);

	}

	function logged_only(){

		if(session_status() == PHP_SESSION_NONE)
			session_start();

		if(!isset($_SESSION['auth'])){

			$_SESSION['flash']['danger'] = '<div class="message"><i class="fa fa-frown-o icone3"></i> Vous devez vous identifier avant de publier une annonce</div>';

			header('location: login.php');

			exit();
		}
	}

	function after_log(){

		if(session_status() == PHP_SESSION_NONE)
			session_start();

		if(isset($_SESSION['auth'])){

			header('location: index.php');

			exit();
		}
	}

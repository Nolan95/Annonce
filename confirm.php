<?php

	$user_id = (int) $_GET['id'];

	$token = (string) $_GET['token'];

	require 'inc/dbconnect.php';

	$req = $pdo->prepare('SELECT * FROM users WHERE idUsers = ?');

	$req->execute([$user_id]);

	$result = $req->fetch();

	session_start();

	if($result && $result->confirmationToken === $token){


		$pdo->prepare('UPDATE users SET confirmationToken = NULL, confirmedAt = NOW() WHERE idUsers = ?')->execute([$user_id]);

		$res = $pdo->query("SELECT typeCompte FROM users ORDER BY idUsers DESC LIMIT 1")->fetch();

		//ON TESTE POUR VOIR SI C'EST UN COMPTE PRO
		if($res->typeCompte === "professionnel"){

			$_SESSION['flash']['success'] = '<div class="message"><i class="fa fa-smile-o icone3"></i>  Votre compte a bien été validé !!</div>';

			header('location: activer.php');

			$_SESSION['auth'] = $result;

			exit();
		}

		$_SESSION['flash']['success'] = '<div class="message"><i class="fa fa-smile-o icone3"></i>  Votre compte a bien été validé !!</div>';

		$_SESSION['auth'] = $result;

		header('location: user_post.php');

		echo "ok";

	}else{

		$_SESSION['flash']['danger'] = '<div class="message"><i class="fa fa-meh-o icone3"></i>  Ce token n\'est plus validable</div>';

		header('location: login.php');

		echo "pas ok";

	}


 ?>

<?php 
	$pdo = new PDO('mysql:dbname=annonce;host:localhost', 'root', 'badameli95');

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

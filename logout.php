<?php

	session_start();

	if(isset($_SESSION['auth'])){

		unset($_SESSION['auth']);

		$_SESSION['flash']['success'] = '<div class="message"><i class="fa fa-thumbs-up icone3"></i>  Vous êtes maintenant deconnecté !! Nous esperons vous revoir bientôt</div>';

		header('location: index.php');
	}

 ?>

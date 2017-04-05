<?php

    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>LaToile</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.css">


        <!--        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="css/plugins.css" />
        <link rel="stylesheet" href="css/lora-web-font.css" />
        <link rel="stylesheet" href="css/opensans-web-font.css" />
        <link rel="stylesheet" href="css/magnific-popup.css">

        <!--Theme custom css -->
        <link rel="stylesheet" href="css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="css/responsive.css" />

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target="#main_navbar">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<!--div class='preloader'><div class='loaded'>&nbsp;</div></div-->


        <nav class="navbar navbar-default" id="main_navbar">

            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="" alt="logo" /></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php"><i class="fa fa-home icone"></i> Acceuil</a></li>
                        <li><a href="annonces.php"><i class="fa fa-list icone"></i> Annonces</a></li>
                        <li><a href="#"><i class="fa fa-bar-chart icone"></i> Professionels</a></li>
                        <?php if(isset($_SESSION['auth'])): ?>
                            <li class=" dropdown">
                                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="fa fa-user icone"></i> <?= $_SESSION['auth']->prenomAb ?><span class="caret"></span></a>
                                <ul class="dropdown-menu list">
                                    <li><a href="profil.php"><i class="fa fa-user icone" style="color: red"></i> Mon profil</a></li>
                                    <li><a href="user_post.php"><i class="fa fa-list icone"></i> Mes annonces</a></li>
                                    <li><a href="logout.php"><i class="fa fa-sign-out icone"></i> Deconnexion</a></li>
                                </ul>
                            </li>
                          <?php endif; ?>
                        <?php if(!isset($_SESSION['auth'])): ?>
                            <li class=" dropdown">
                                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="fa fa-user icone"></i>  Mon Compte  <span class="caret"></span></a>
                                <ul class="dropdown-menu list">
                                    <li><a href="login.php"><i class="fa fa-sign-in icone"></i> Se connecter</a></li>
                                    <li><a href="register.php"><i class="fa fa-user-plus icone"></i> Creer un compte</a></li>
                                    <li><a href="forget.php">Mot de passe oublié ?</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                        <li><a href="publisher.php" class="btn btn-success" id="btn-pub"><i class="fa fa-plus icone"></i>   Publier une annonce gratuitement</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

<?php

session_start();

//Inclusion du fichier contenant les fonctions
require_once 'inc/fonctions.php';

after_log();

?>

<?php

 if(!empty($_POST)){

    $errors = array();

    //Inclusion du fichier de connexion à la base de données
    require 'inc/dbconnect.php';

    //Test de validation de la saisie du prenom
    if(empty($_POST['firstname'])){

      $errors['firstname'] = "Vous n'avez pas saisi votre prenom";

    }

    //Test de validation de la saisie du nom
    if(empty($_POST['surname'])){

      $errors['surname'] = "Vous n'avez pas saisi votre nom";

    }

    //Test de validation de la saisie du tel
    if(empty($_POST['tel'])){

      $errors['tel'] = "Vous n'avez pas saisi votre numero de telephone";

    }


    //Test de validation de la saisie du pseudo
    if(empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]*$/', $_POST['username'])){

      $errors['username'] = "votre pseudo n'est pas valide";

    }else{

          $req = $pdo->prepare('SELECT idUsers FROM users WHERE username = ?');

          $req->execute([$_POST['username']]);

          $users = $req->fetch();

          if($users){

            $errors['username'] = "Ce pseudo est dejà utilisé pour un autre compte";

          }

    }

    //Test de validation de la saisie de l'email
    if(empty($_POST['email']) || !preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/', $_POST['email'])){

      $errors['email'] = "Votre email n'est pas valide";

    }else{

          $req = $pdo->prepare('SELECT idUsers FROM users WHERE emailAb = ?');

          $req->execute([$_POST['email']]);

          $users = $req->fetch();

          if($users){

            $errors['email'] = "Cet email est dejà utilisé pour un autre compte";

          }
    }

    //Test de validation de la saisie du mot de passe
    if(empty($_POST['password'])){

      $errors['password'] = "Vous n'avez pas saisi le mot de passe";

    }

    //Test de validation de la saisie du mot de passe de confirmation
    if(empty($_POST['confirm_password'])){

      $errors['confirm_password'] = "Veuillez confirmer le mot de passe";

    }else {

      if($_POST['password'] != $_POST['confirm_password']){

        $errors['confirmation'] = "Les mot de passe saisis ne correspondent pas";

      }

    }

    //Test du type de compte choisi par l'utilisateur
    if($_POST['compte'] == "professionnel"){
      if(empty($_POST['entreprise'])){
        $errors['entreprise'] = "Veuillez saisir le nom de votre entrprise";
      }
    }


    //S'il n'ya pas d'erreurs....
    if(empty($errors)){
      //On fait l'encryption
      $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

      $token = str_random(60);

      $req = $pdo->prepare('INSERT INTO users SET nomAb = ?, prenomAb = ?, emailAb = ?, telephoneAb = ?, username = ?, password = ?, typeCompte = ?, confirmationToken = ?');

      $req->execute([$_POST['surname'], $_POST['firstname'], $_POST['email'], $_POST['tel'], $_POST['username'], $password, $_POST['compte'], $token]);

      $user_id = $pdo->lastInsertId();

      ini_set('smtp_port', 1025);

      mail($_POST['email'], "Confirmation de votre email", "Afin de valider votre compte merci de cliquer sur ce lien\n\n\nhttp://localhost/Annonce/confirm.php?id=$user_id&token=$token");

      $_SESSION['flash']['success'] = "Un mail a été envoyé dans votre boite mail afin de confirmer votre adresse email et valider votre compte.\n\n\nLe delai de validation est de 48 heures, dépassé ce delai et votre compte sera supprimé ";

      header('Location: login.php');

      exit();

    }

 }


?>


<?php require 'inc/header.php'; ?>

<script type="text/javascript">
  //On attend que la page soit chargée entierement pour executer le script
  document.addEventListener('DOMContentLoaded', function(){
    //La variable champ contient la liste deroulante
    var champ = document.getElementById('compte')
    champ.addEventListener('change', function(e){
      //On recupere l'ensemble des options de la liste dereoulante
      var options = champ.options
      if(options[options.selectedIndex].value === "professionnel"){
        //On change l'attribut display en block, pour l'afficher
        document.getElementById('entreprise').style.display = 'block'
      }else {
        //Dans le cas contraire on le ramene en none pour le cacher
        document.getElementById('entreprise').style.display = 'none'
      }
    })
  })
</script>

<div class="container">

<section class="sections">

  <!-- On verifie s'il y a des erreurs liées à la saise du formulaire -->
  <?php if(!empty($errors)): ?>

    <div class="alert alert-danger">

      <p class="message"><i class="fa fa-meh-o icone3"></i> Le formulaire a été mal saisi</p>

      <ul>

        <?php foreach ($errors as $error): ?>

          <li><?= $error; ?></li>

        <?php endforeach; ?>

      </ul>

    </div>

  <?php endif; ?>

  <!-- On verifie si on n'a pas de message venant de d'autres pages -->
  <?php if(!empty($_SESSION['flash'])): ?>
    <!-- on parcourt les messages envoyés -->
    <?php foreach ($_SESSION['flash'] as $type => $message): ?>
      <!-- On affcihe chaque message -->
      <div class="alert alert-<?= $type; ?> text-center"><?=$message ?> </div>

    <?php endforeach; ?>
    <!-- On vide la var globale flash -->
    <?php unset($_SESSION['flash']);  ?>

  <?php endif; ?>


  <div class="heading text-center">
      <h1>S'Inscrire</h1>
      <div class="separator3"></div>
  </div>


<div class="row">

<div class="col-lg-12">

  <div class="col-lg-9">

    <form class="form-horizontal" action="" method="POST">

    <fieldset>

      <!-- Firstname input-->
    <div class="form-group">
      <div class="col-lg-12">
        <div class="col-lg-6">
          <label class="control-label" for="radios">Type de compte</label>
          <select class="form-control" name="compte" id="compte" onchange="onChange()">
            <option value="particulier" selected>Particulier</option>
            <option value="professionnel">Professionnel</option>
          </select>
        </div>
        <div class="col-lg-6" id="entreprise" style="display: none">
          <label class="control-label" for="entrprise">Entreprise</label>
          <input type="text" name="entreprise" placeholder="le nom de votre entreprise" class="form-control input-md">
        </div>
      </div>
    </div><!--Fin de la balise div.form-group -->


    <!-- Firstname input-->
    <div class="form-group">
      <div class="col-lg-12">
        <div class="col-lg-6">
          <label class="control-label" for="textinput">Prenom</label>
          <input id="textinput" name="firstname" type="text" placeholder="placeholder" class="form-control input-md">
        </div>

        <div class="col-lg-6">
          <label class="control-label" for="textinput">Nom</label>
          <input id="textinput" name="surname" type="text" placeholder="placeholder" class="form-control input-md">
        </div>
      </div>
    </div><!--Fin de la balise div.form-group -->


    <!-- Tel and username input-->
    <div class="form-group">
      <div class="col-lg-12">
        <div class="col-lg-6">
          <label class="control-label" for="textinput">Telephone</label>
          <input id="textinput" name="tel" type="tel" placeholder="placeholder" class="form-control input-md">
        </div>

        <div class="col-lg-6">
          <label class="control-label" for="textinput">Pseudo</label>
          <input id="textinput" name="username" type="text" placeholder="placeholder" class="form-control input-md">
        </div>
      </div>
    </div><!--Fin de la balise div.form-group -->


    <!-- Email and password input-->
    <div class="form-group">
      <div class="col-lg-12">
        <div class="col-lg-6">
          <label class="control-label" for="textinput">Email</label>
          <input id="textinput" name="email" type="email" placeholder="placeholder" class="form-control input-md">
        </div>
        <div class="col-lg-6">
          <label class="control-label" for="textinput">Mot de passe</label>
          <input id="textinput" name="password" type="password" placeholder="placeholder" class="form-control input-md">
        </div>
      </div>
    </div><!--Fin de la balise div.form-group -->


    <!-- Confirm Password input-->
    <div class="form-group">
      <div class="col-lg-12">
        <div class="col-lg-6">
          <label class="control-label" for="passwordinput">Confirmer le mot de passe</label>
          <input id="passwordinput" name="confirm_password" type="password" placeholder="placeholder" class="form-control input-md">
        </div>
      </div>
    </div>


    <!-- Button -->
    <div class="form-group">
      <div class="col-lg-12">
          <div class="col-lg-3"></div>
          <button id="button2id" name="button2id" class="btn btn-primary col-lg-6" type="submit">S'inscrire</button>
      </div>
        <!--p id="button1id" name="button1id" class="col-md-2">Vous n'êtes pas inscrit ? <a href="register.php" class="btn col-md-2">Enregistrez-vous</a></p-->
    </div>


    <!-- Separator -->
    <div id="separator4"></div>


    <!-- Button 2 / Connexion -->
    <div class="form-group">

      <div class="col-lg-12 text-center">

          <label class="control-label">Deja membre ? </label>

      </div>


    </div>


    <div class="form-group">

      <div class="col-lg-12">

          <div class="col-lg-3"></div>
          <a href="login.php" class="btn btn-primary col-lg-6">Se connecter</a>

      </div>


    </div>




    </fieldset>
    </form>

  </div><!--Fin de la balise div.col-lg-9-->

  <div class="col-lg-3 box">

    <h2 class="text-center">Aide</h2>

    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

  </div>

</div><!--Fin de la balise div.col-lg-12-->

</div><!--Fin de la balise div.row-->

</section>



</div><!-- Fin de la balise div.container-->

<?php require 'inc/footer.php'; ?>

<?php

  require_once 'inc/fonctions.php';

  after_log();

  if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])){

    require 'inc/dbconnect.php';

    $req = $pdo->prepare('SELECT * FROM users WHERE (username = :username OR emailAb = :username) AND confirmedAt IS NOT NULL ');

    $req->execute(['username' => $_POST['username']]);

    $res = $req->fetch();

    if($res){

      if(password_verify($_POST['password'], $res->password)){

            if(session_status() == PHP_SESSION_NONE){
                session_start();
            }

            $_SESSION['auth'] = $res;

            $_SESSION['flash']['success'] = '<div class="message"><i class="fa fa-smile-o icone3"></i> Vous êtes bien connecté !! Bienvenue</div>';

            header('Location: index.php');

            die();

        }else{

          if(session_status() == PHP_SESSION_NONE){
              session_start();
          }

          $_SESSION['flash']['danger'] = '<div class="message"><i class="fa fa-frown-o icone3"></i>  Pseudo ou Mot de passe incorrect</div>';

        }
    }else {
      # code...
      if(session_status() == PHP_SESSION_NONE){
          session_start();
      }

      $_SESSION['flash']['danger'] = '<div class="message"><i class="fa fa-frown-o icone3"></i>  Aucun compte ne correspond aux informations saisies</div>';

    }



  }

 ?>

<?php require 'inc/header.php'; ?>
<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function(){
    var form = document.querySelector('#loginForm')
    good = 1
    var pseudo = document.querySelector('#pseudo')
    var password = document.querySelector('#password')
    pseudo.addEventListener('blur', function(e){
      if(pseudo.value === ""){
        var error = document.querySelector('#errorPseudo')
        error.style.color="red"
        error.style.fontSize = "20px"
        error.innerText = "Saisissez votre pseudo ou email"
        good = 0
      }else {
        var error = document.querySelector('#errorPseudo')
        error.style.color="red"
        error.style.fontSize = "20px"
        error.innerText = ""
      }
    })

    password.addEventListener('blur', function(e){
      if(password.value == ""){
        var error = document.querySelector('#errorPassword')
        error.style.color="red"
        error.style.fontSize = "20px"
        error.innerText = "Saisissez votre mot de passe"
        good = 0
      }else {
        var error = document.querySelector('#errorPassword')
        error.innerText = ""
      }

    })

    form.addEventListener('submit', function(e){
      if(good === 0){
        e.preventDefault()
      }
    })

  })
</script>
<div class="container">

  <section class="sections">

    <?php if(!empty($_SESSION['flash'])): ?>

      <?php foreach ($_SESSION['flash'] as $type => $message): ?>

        <div class="alert alert-<?= $type; ?> text-center"><?=$message ?> </div>

      <?php endforeach; ?>

      <?php unset($_SESSION['flash']);  ?>

    <?php endif; ?>

    <div class="heading text-center">

      <h1>Se connecter</h1>
      <div class="separator3"></div>

    </div>

    <div class="col-lg-7 cnx">

    <form class="form-horizontal" action="" method="POST" id="loginForm">
      <fieldset>
      <!-- Facebook connection -->
      <div class="form-group">
        <label class="col-md-2 control-label" for="button1id"></label>
        <a class="btn btn-primary col-md-9" style="background-color: #0d87e9" type="submit"><i class="fa fa-facebook-square icone"></i>    Se connecter avec facebook</a>
      </div>

      <div class="text-center">
        <p style="font-size: 30px;margin-bottom: 17px">
          OU
        </p>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Pseudo ou Email</label>
        <div class="col-md-8">
        <input id="pseudo" name="username" type="text" placeholder="placeholder" class="form-control input-md">
        <span id="errorPseudo"></span>
        </div>
      </div>

      <!-- Password input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="passwordinput">Mot de passe</label>
        <div class="col-md-8">
          <input id="password" name="password" type="password" placeholder="placeholder" class="form-control input-md">
          <span id="errorPassword"></span><br>
          <a href="forget.php" style="font-size: 20px">Mot de passe oublié ?</a></p>
        </div>
      </div>

      <div class="form-group">
          <label class="control-label col-md-4"></label>
          <label class="col-md-8">
              <input type="checkbox" name="remember" id="remember">  Se souvenir de moi
         </label>
      </div>

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-2 control-label" for="button1id"></label>
        <button id="button2id" name="button2id" class="btn btn-primary col-md-9" type="submit"><i class="fa fa-sign-in icone"></i> Me connecter</button>
      </div>

      </fieldset>
    </form>

    </div>

    <div class="col-lg-5">

      <h3 class="text-center">Pas encore membre ?</h3><br>

      <a href="register.php" class="btn btn-primary col-lg-12"><i class="fa fa-user-plus icone"></i> Enregistrer vous</a>
      <p>
        <i class="fa fa-info-circle icone" style="margin-top: 20px;"></i>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>

    </div>

  </section>

</div>


<?php require 'assets/inc/footer.php'; ?>

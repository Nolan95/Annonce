<?php

  if(isset($_GET['id']) && isset($_GET['reset_token'])){

      require_once 'assets/inc/dbconnect.php';

      $req = $pdo->prepare('SELECT * FROM users WHERE idUsers = ? AND resetToken = ? AND resetAt > date_sub(NOW(), INTERVAL 30 MINUTE)');

      $req->execute([$_GET['id'], $_GET['reset_token']]);

      $res = $req->fetch();

      if($res){

          if(!empty($_POST)){

            if(!empty($_POST['password']) && $_POST['password'] == $_POST['confirm_password']){

                 $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

                $pdo->prepare('UPDATE users SET password = ?, resetToken = NULL, resetAt = NULL WHERE idUsers = ?')->execute([$password, $res->idUsers]);

                session_start();

                $_SESSION['auth'] = $res;

                $_SESSION['flash']['success'] = "Votre mot de passe a bien été réinitialiser";

                header('Location: index.php');

            }
          }

      }else{

        session_start();

        $_SESSION['flash']['danger'] = "Ce token n'est pas valide";

        header('Location: login.php');

        exit();

      }


  }else{

    header('Location: login.php');

    exit();

  }

 ?>

<?php require 'assets/inc/header.php'; ?>

<div class="container">

  <section class="sections">

    <?php if(!empty($_SESSION['flash'])): ?>

      <?php foreach ($_SESSION['flash'] as $type => $message): ?>

        <div class="alert alert-<?= $type; ?> text-center"><?=$message ?> </div>

      <?php endforeach; ?>

      <?php unset($_SESSION['flash']);  ?>

    <?php endif; ?>

    <div class="heading text-center">

      <h1>Réenitialiser votre mot de passe</h1>
      <div class="separator3"></div>

    </div>

    <div class="col-lg-10">

    <form class="form-horizontal" action="" method="POST">
      <fieldset>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Nouveau mot de passe</label>
        <div class="col-md-8">
        <input id="textinput" name="password" type="password" placeholder="placeholder" class="form-control input-md">
        </div>
      </div>

      <!-- Password input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="passwordinput">Confirmer le mot de passe</label>
        <div class="col-md-8">
          <input id="passwordinput" name="confirm_password" type="password" placeholder="placeholder" class="form-control input-md">
        </div>
      </div>

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-6 control-label" for="button1id"></label>
        <div class="col-md-6">
          <button id="button2id" name="button2id" class="btn btn-primary col-md-8" type="submit">Envoyer</button>
        </div>

      </div>

      </fieldset>
    </form>

    </div>

  </section>

</div>


<?php require 'assets/inc/footer.php'; ?>

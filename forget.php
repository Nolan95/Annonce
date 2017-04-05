<?php
      session_start();

      require_once 'assets/inc/fonctions.php';

      after_log();

      if(!empty($_POST) && !empty($_POST['email'])){

        require_once 'assets/inc/dbconnect.php';

        $req = $pdo->prepare('SELECT * FROM users WHERE emailAb = ? AND confirmedAt IS NOT NULL');

        $req->execute([$_POST['email']]);

        $res = $req->fetch();

        if($res){

              $user_id = $res->idUsers;

              $reset_token = str_random(60);

              $pdo->prepare('UPDATE users SET resetToken = ?, resetAt = NOW() WHERE idUsers = ?')->execute([$reset_token, $res->idUsers]);

              ini_set('smtp_port', 1025);

              mail($_POST['email'], "Reinitialiser votre mot de passe", "Afin de réinitialiser votre mot de passe merci de cliquer sur ce lien\n\n\nhttp://localhost/Annonce/reset.php?id=$user_id&reset_token=$reset_token");

              $_SESSION['flash']['success'] = "Les instructions de rappel de mot de passe vous ont été envoyées par email";

              header('Location: login.php');

              exit();

          }else{

            $_SESSION['flash']['danger'] = "Aucun compte ne correspond à cette adresse mail. Inscrivez vous !!";

            header('Location: register.php');

            exit();

          }

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

      <h1>Mot de passe oublié</h1>
      <div class="separator3"></div>

    </div>

    <div class="col-lg-10">

      <form class="form-horizontal" action="" method="POST">
        <fieldset>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Email</label>
          <div class="col-md-8">
          <input id="textinput" name="email" type="email" placeholder="placeholder" class="form-control input-md">
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

<?php   
    require_once APP_ROOT . '/Views/Include/Layout/login/header.php';
?>
<form class="form-signin" id="common-form-login" action="/login" method="POST">
  <div class="text-center mb-5">
    <img class="mb-4 rounded-circle" src="/public/img/logo/logo.jpg" alt="" width="80" height="80">
    <h1 class="h3 mb-3 font-weight-normal">Espace admin</h1>
  </div>

  
  <div class="form-label-group mt-4 message-login">
      
    </div>
  <div class="form-label-group">
    <input type="email" id="inputEmail" class="form-control require" name="username" placeholder="Nom d'utilisateur ou email" />
    <label for="inputEmail">Nom d'utilisateur ou email</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control require" name="password" placeholder="Mot de passe" />
    <label for="inputPassword">Mot de passe</label>
  </div>

  <button class="btn btn-lg btn-primary btn-block form-button" type="submit" rel="login">Se connecter</button>
  <hr class="mb-3">
  <p class="text-center">  <a href="/">Retour à l'accueil <i class="fa fa-home"></i></a></p>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2021-2022</p>
</form>
<?php require_once APP_ROOT . '/Views/Include/Layout/login/footer.php'; ?>


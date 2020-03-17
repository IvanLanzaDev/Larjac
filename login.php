<?php include("functions.class.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#01458E">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#01458E">

    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">

    <title>Larjac - Acesso ao Sistema</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin col-12" method="post">
      <img class="mb-4 w-75 h-75" src="imgs/logo.png" alt="" width="72" height="72">
      <h3 class="h3 mb-3 font-weight-normal">Acesso ao Sistema</h3>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus name="email_user">
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required name="pass_user">
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="btn_login">Entrar</button>
      <p class="mt-5 mb-3 text-muted">Larjac &reg; 2012-2019</p>
    </form>
  </body>
</html>

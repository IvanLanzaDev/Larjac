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
    <title>Larjac</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center bg-info">
    <form class="form-signin col-12" method="post" action="#">
        <img src="imgs/cute.png" class="img-fluid">
        <h1 class=" text-white">Tem Certeza?</h1>
        <p class="text-light">Não há como desfazer esta ação.</p>
        
            <input type="submit" class="btn btn-danger btn-block mb-2" name="btn_delete_product" value="Exluir Produto">
            <a href="view-products.php" class="btn btn-light btn-block">Cancelar</a>
        
        
    </form>
  </body>
</html>

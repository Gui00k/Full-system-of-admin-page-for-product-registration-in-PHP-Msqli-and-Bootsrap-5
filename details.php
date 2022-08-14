<?php
  include 'action.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CRUD App</title>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>
  <nav  style="width: 100%;height:80px;background-color: gray" class="navbar navbar-expand-md  navbar-dark">
   
    <a style=" color:white; font-size: 30px;" class="navbar-brand" href="telaLogado.php">CRUD App</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
   
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Estoque</a>
        </li>
        
      </ul>
    </div>
    <form class="form-inline" action="/action_page.php">
      <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar">
      <button class="btn btn-primary" type="submit">Pesquisar</button>
    </form>
  </nav>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 mt-3 bg-info p-4 rounded">
        <h2 class="bg-light p-2 rounded text-center text-dark">ID : <?= $vid; ?></h2>
        <div class="text-center">
          <img src="<?= $row['imagem']; ?>" width="300" class="img-thumbnail">
        </div>
        
        <h4 class="text-light">Name : <?= $row['nome']; ?></h4>
        <h4 class="text-light">Tipo : <?= $row['tipo_prod_id']; ?></h4>
        <h4 class="text-light">Preco : <?= $vpreco; ?></h4>
        <h4 class="text-light">Descrição do produto : <?= $row['descri']; ?></h4>
      </div>
    </div>
  </div>
</body>

</html>
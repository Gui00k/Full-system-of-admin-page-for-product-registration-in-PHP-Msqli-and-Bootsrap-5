<?php

    //iniciando sessao
    session_start();
    
    //validando se o usuario esta logado
   
    $logado = $_SESSION['email'];

    
?>
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
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css" />

  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
</head>
<style>
  img{

  }
</style>

<body>

  <nav style="width: 100%;height:80px;background-color: gray;" class="navbar navbar-expand-md  ">
  
    <!-- Brand -->
    <a style=" color:white; font-size: 30px;" class="navbar-brand " href="telaLogado.php">Gui App</a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a style=" color:white; font-size: 20px;" class="nav-link" href="#">Produtos</a>
        </li>
        <li class="nav-item">
          <a style=" color:white;font-size: 20px;" class="nav-link" href="#">Estoque</a>
        </li>
        
      </ul>
    </div>
    
    <form class="form-inline" action="/action_page.php">
      <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar">
      <button class="btn btn-primary" type="submit">Pesquisar</button>
    </form>
  </nav>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-10">
      <br>
    <?php
        //mostrando o usuario logado na tela
        echo "<h1>Bem vindo: <u>$logado</u></h1>";
    ?>
    <br>
        <h3 class="text-center text-dark mt-2">Sistema de Cadastro de Produto PHP e MySqli</h3>
      
        <hr>
        <?php if (isset($_SESSION['response'])) { ?>
        <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <b><?= $_SESSION['response']; ?></b>
        </div>
        <?php } unset($_SESSION['response']); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <h3 class="text-center text-info">Cadastrar Produto</h3>
        <form action="action.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $id; ?>">
          <div class="form-group">
            <input type="text" name="nome_prod" value="<?= $nome?>" class="form-control" placeholder="Titulo do Produto" required>
          </div>
          <div class="form-group">
    <label for="exampleFormControlSelect1">Selecione o Tipo de produto</label>
    <select class="form-select" name="tipo_prod"> aria-label="Default select example">
     
					<option>Selecione</option>
					<?php
						$result_niveis_acessos = "SELECT * FROM tipo_prod";
						$resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
						while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
							<option value="<?php echo $row_niveis_acessos['id']; ?>"><?php echo $row_niveis_acessos['nome']; ?></option> <?php
						}
					?>
				<br><br>
</select>

  </div>
          <!-- <div class="form-group">
            <input type="text" name="tipo" value="<?= $tipo; ?>" class="form-control" placeholder="Tipo do Produto" required>
          </div> -->
         
          
          <!-- <div class="form-group">
            <input type="text" name="tamanho" value="<?= $tamanho; ?>" class="form-control" placeholder="Tamanho " required>
          </div> -->
          <div class="form-group">
          <input type="text" name="preco" value="<?= $preco; ?>" class="form-control" placeholder="Preço do produto" required>
          </div>
          <div class="form-group">
          <input type="text" name="imagem" value="<?= $imagem; ?>" class="form-control" placeholder="Url da imagem" required>
          </div>
          <div class="form-group">
    <label for="exampleFormControlTextarea1">Descrição do produto
    </label>
    <textarea name="descri" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
 

          <!-- <div class="form-group">
            <input type="hidden" name="oldimage" value="<?= $photo; ?>">
            <input type="file" name="image" class="custom-file">
            <img src="<?= $photo; ?>" width="120" class="img-thumbnail">
          </div> -->
          <div class="form-group">
            <?php if ($update == true) { ?>
            <input type="submit" name="update" class="btn btn-success btn-block" value="Alterar Cadastro">
            <?php } else { ?>
            <input type="submit" name="add" class="btn btn-primary btn-block" value="Cadastrar">
            <?php } ?>
          </div>
        </form>
      </div>
      <div class="col-md-8">
        <?php
          $query = 'SELECT * FROM produto';
          $stmt = $conn->prepare($query);
          $stmt->execute();
          $result = $stmt->get_result();
        ?>
        <h3 class="text-center text-info">Produtos no Sistema</h3>
        <table class="table table-hover" id="data-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Imagem</th>
              <th>Nome do Produto</th>
              <th>Categoria</th>
              <th>Preço</th>
              <th>Alterações</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
              <td><?= $row['id']; ?></td>
              <td><img src="<?= $row['imagem']; ?>" width="50"></td>
              <td><?= $row['nome']; ?></td>
              <td><?= $row['tipo_prod_id']; ?></td>
              <td><?= $row['preco']; ?></td>
              <td>
                <a href="details.php?details=<?= $row['id']; ?>" class="badge badge-primary p-2">Vizualizar</a> |
                <a href="action.php?delete=<?= $row['id']; ?>" class="badge badge-danger p-2" onclick="return confirm('Deseja realmente apagar?');">Apagar</a> |
                <a href="telaLogado.php?edit=<?= $row['id']; ?>" class="badge badge-success p-2">Editar</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#data-table').DataTable({
      paging: true
    });
  });
  </script>
</body>

</html>
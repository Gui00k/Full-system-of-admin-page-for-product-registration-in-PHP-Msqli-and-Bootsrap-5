<?php
     //recebendo dados do formulario
    if(isset($_POST['submit']))
    {
        
include_once('config.php'); 
$nome = $_POST['nome']; 
$email = $_POST['email'];
$senha = $_POST['senha']; 


//inserindo no banco de dados
$result = mysqli_query($conn, "INSERT INTO cadastro5(nome,senha,email) VALUES
('$nome','$senha','$email')");
header('Location: home.php'); } 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tela de cadastro</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <style>
    a {
      text-decoration: none;
    }
    .login-page {
      width: 100%;
      height: 100vh;
      display: inline-block;
      display: flex;
      align-items: center;
    }
    .form-right i {
      font-size: 100px;
    }
  </style>
  <body>
    <div class="login-page bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <h3 class="mb-3">Tela de Login</h3>
            <div class="bg-white shadow rounded">
              <div class="row">
                <div class="col-md-7 pe-0">
                  <div class="form-left h-100 py-5 px-5">
                    <form action="cadastro.php" method="POST" class="row g-4">
                      <div class="col-12">
                        <label>Nome<span class="text-danger">*</span></label>
                        <div class="input-group">
                          <div class="input-group-text">
                            <i class="bi bi-person-fill"></i>
                          </div>
                          <input name="nome"
                            type="text"
                            class="form-control"
                            placeholder="Digite seu nome"
                          />
                        </div>
                      </div>
                      <div class="col-12">
                        <label>Email<span class="text-danger">*</span></label>
                        <div class="input-group">
                          <div class="input-group-text">
                            <i class="bi bi-envelope-fill"></i>
                          </div>
                          <input name="email"
                            type="text"
                            class="form-control"
                            placeholder="Digite seu email"
                          />
                        </div>
                      </div>

                      <div class="col-12">
                        <label>Senha<span class="text-danger">*</span></label>
                        <div class="input-group">
                          <div class="input-group-text">
                            <i class="bi bi-lock-fill"></i>
                          </div>
                          <input name="senha"
                            type="text"
                            class="form-control"
                            placeholder="Digite sua senha"
                          />
                        </div>
                      </div>

                      <div class="col-12">
                        <button name="submit"
                          type="submit"
                          class="btn btn-primary px-4 float-end mt-4"
                        >
                          Cadastrar
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-5 ps-0 d-none d-md-block">
                  <div
                    class="form-right h-100 bg-primary text-white text-center pt-5"
                  >
                    <i class="bi bi-bootstrap"></i>
                    <h2 class="fs-1">
                      Preencha todos os campos para cadastrar
                    </h2>
                  </div>
                </div>
              </div>
            </div>
            <p class="text-end text-secondary mt-3">
              Pagina construida com bootstrap 5 <br> Creditos - Guilherme Machado <br> Linkedin - https://www.linkedin.com/in/guilherme-machado-freitas-694023237/
            </p>
          </div>
        </div>
      </div>
    </div>

   
  </body>
</html>

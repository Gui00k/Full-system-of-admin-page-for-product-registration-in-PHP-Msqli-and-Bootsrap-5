
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>How To Create</title>
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
      text-align: center;
      align-content: center;
    }
    .form-right i {
      font-size: 100px;
    }
  </style>
  <body>
    <div class="login-page bg-light">
      <div class="container">
        <div class="row">
          <div style="align-items: center" class="col-md-5 offset-lg-1">
            <h3 class="mb-3">Tela de login</h3>
            <div class="bg-white shadow rounded">
              <div class="row">
                <div class="col-md-12 pe-0">
                  <div class="form-left h-100 py-5 px-5">
                    <form action="sistemaLogin.php" method="POST" class="row g-4">
                      <div class="col-12">
                        <label
                          >Usuario ou Email<span class="text-danger"
                            >*</span
                          ></label
                        >
                        <div class="input-group">
                          <div class="input-group-text">
                            <i class="bi bi-person-fill"></i>
                          </div>
                          <input name="email"
                            type="text"
                            class="form-control"
                            placeholder="Login"
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

                      <div class="col-sm-6">
                        <div class="form-check">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            id="inlineFormCheck"
                          />
                          <label class="form-check-label" for="inlineFormCheck"
                            >Continuar logado</label
                          >
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <a href="#" class="float-end text-primary"
                          >Esqueceu a senha?</a
                        >
                      </div>

                      <button class="btn btn-primary" type="submit" name="submit" >
                        Login
                      </button>
                      <a
                        class="btn btn-primary"
                        href="cadastro.php"
                        role="button"
                        >Cadastrar</a
                      >
                    </form>
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

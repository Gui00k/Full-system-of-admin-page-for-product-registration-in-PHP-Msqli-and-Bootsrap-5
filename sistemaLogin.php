<?php

    //iniciando sessão 
    session_start();
   
    //recebendo dados do formulario
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        // Acessando Banco de dados
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];


       //selecionando o banco de cadastro
        $sql = "SELECT * FROM cadastro5 WHERE email = '$email' and senha = '$senha'";

        $result = $conn->query($sql);

        
        // validando se o usuario existe no banco de de dados     
        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            //caso nao esteja no banco volta pra pagina de login
            header('Location: login.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            //caso exista vai pra pagina de logado
            header('Location: telaLogado.php');
        }
    }
    else
    {
        // Não acessa volta pra pagina de login
        header('Location: login.php');
    }
?>
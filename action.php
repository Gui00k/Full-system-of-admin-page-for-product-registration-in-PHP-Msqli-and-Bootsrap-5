<?php
    //iniciando sessao
	
	include 'config.php';
     
	//recebendo os parametros do formulario
	$update=false;
	$id="";
	$nome="";
	$descri="";
	$preco="";
	$imagem="";
	$tipo_prod_id="";
	
    //validando o tipo para a ação
	if(isset($_POST['add'])){

		//passando os parametros recebidos pelo metodo POST para as variaveis
		$nome=$_POST['nome_prod'];
		$descri=$_POST['descri'];
		$preco=$_POST['preco'];
		$imagem=$_POST['imagem'];
		$tipo_prod_id=$_POST['tipo_prod'];
		
		//inserindo no banco de dados o produto
		$query="INSERT INTO produto(nome,descri,preco,imagem, tipo_prod_id)VALUES(?,?,?,?,?)";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("sssss",$nome,$descri,$preco,$imagem,$tipo_prod_id);
		$stmt->execute();
		
        //caso retorne sucesso a tela reloga
		header('location:telaLogado.php');
		$_SESSION['response']="Produto inserido com sucesso!";
		$_SESSION['res_type']="success";
	}

	//tipo delete
	if(isset($_GET['delete'])){
		$id=$_GET['delete'];

        //recebe o ID e deleta do banco
		$query="DELETE FROM produto WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
         
		//caso de sucesso a pagina reloga e aparece a mensagem de sucesso
		header('location:telaLogado.php');
		$_SESSION['response']="Produto deletado com sucesso!";
		$_SESSION['res_type']="danger";
	}

	//tipo editar
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];

		//selecionando o produto no banco de dados
		$query="SELECT * FROM produto WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();
        
		//passando os parametros para as variaveis
		$id=$row['id'];
		$nome=$row['nome'];
		$descri=$row['descri'];
		$preco=$row['preco'];
		$imagem=$row['imagem'];
		$tipo_prod=$row['tipo_prod_id'];
         
		//se o update for true executa a ação
		$update=true;
	}
	if(isset($_POST['update'])){
		$id=$_POST['id'];
		$nome=$_POST['nome_prod'];
		$descri=$_POST['descri'];
		$preco=$_POST['preco'];
		$imagem=$_POST['imagem'];
		$tipo_prod_id=$_POST['tipo_prod'];

		//fazendo o update no banco de dados
		$query="UPDATE produto SET nome=?,descri=?,preco=?,imagem=?,tipo_prod_id=? WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("sssssi",$nome,$descri,$preco,$imagem,$tipo_prod_id,$id);
		$stmt->execute();
		
        //verificando se retornou sucesso 
		$_SESSION['response']="Updated Successfully!";
		$_SESSION['res_type']="primary";
		header('location:telaLogado.php');
	}

	//pagina de detalhes 
	if(isset($_GET['details'])){
		$id=$_GET['details'];

		//select do produto no banco de dado
		$query="SELECT * FROM produto WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();
        

		//passando os parametros do banco de dados para as variaveis
		$vid=$row['id'];
		$vnome=$row['nome'];
		$vdescri=$row['descri'];
		$vpreco=$row['preco'];
		$vimagem=$row['imagem'];
		$vtipo_prod_id=$row['tipo_prod_id'];


		
	}
?>
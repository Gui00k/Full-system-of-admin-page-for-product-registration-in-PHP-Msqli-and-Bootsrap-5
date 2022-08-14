<?php

    //conexão com o banco 
	const DBHOST = 'localhost';
	const DBUSER = 'root';
	const DBPASS = '';
	const DBNAME = 'test1';

	$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
    
	//validando a conexão
	if ($conn->connect_error) {
	  die('Não foi possivel conectar com o banco de dados' . $conn->connect_error);
	}
?>
<?php
    $dbHost ='localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName='landing';

    $conexao = new mysqli( $dbHost,  $dbUsername,$dbPassword,$dbName);

    if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}
?>
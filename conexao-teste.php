<?php
    $servidor = "localhost";
    $user = "root";
    $senha = "";
    $dbname = "teste";    
    
    //Criar a conexao
    $conn = mysqli_connect($servidor, $user, $senha, $dbname);
    
    if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        /* echo "Conexao realizada com sucesso"; */
    }
?> 
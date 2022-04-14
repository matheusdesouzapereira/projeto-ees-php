<?php

session_start();
include_once 'conexao.php';

$nome               = $_POST['nome'];
$usuario            = $_POST['usuario'];
$senha              = $_POST['senha'];
$nivel_acesso       = $_POST['nivel_acesso'];

$data               = date("Y-m-d H:i:s");

/* Nível de acesso 1 = Administrador */
/* Nível de acesso 2 = Assistente   */

$senhaCrip = base64_encode($senha);

/* Cadastramento */
$query = "SELECT * FROM usuarios WHERE usuario = '" . $_POST['usuario'] . "'";
    $resulta = mysqli_query($conn, $query) or die (mysqli_error($conn));
    
    if(mysqli_num_rows($resulta) == 0){
        $sql = "INSERT INTO usuarios (nome, usuario, senha, data_cadastro, nivel_acesso) VALUES ('$nome','$usuario','$senhaCrip', '$data', '$nivel_acesso')";
        
        $inserir = mysqli_query($conn, $sql);

        $gravar = mysqli_affected_rows($conn);
        if($gravar == 1){
            $_SESSION['msg'] = "<script>alert('Usuário cadastrado com sucesso.')</script>";
            header("Location: cadastro-usuarios.php");
        }else{
            $_SESSION['msg'] = "<script>alert('Erro ao cadastrar.');</script>";
            header("Location: cadastro-usuarios.php");
        }
    }else{
            $_SESSION['msg'] = "<script>alert('Usuário existente.');</script>";
            header("Location: cadastro-usuarios.php");
        }

?>
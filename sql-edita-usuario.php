<?php

session_start();
include_once 'conexao.php';

$id_usuario         = $_POST['id_usuario'];
$nome               = $_POST['nome'];
$usuario            = $_POST['usuario'];
$senha              = $_POST['senha'];
$senhaCrip = base64_encode($senha);
$nivel_acesso       = $_POST['nivel_acesso'];

/* Nível de acesso 1 = Administrador */
/* Nível de acesso 2 = Assistente   */

/* Alterar Usuário */

    $sql = "UPDATE usuarios SET nome='$nome', usuario='$usuario', senha='$senhaCrip', nivel_acesso='$nivel_acesso' WHERE id_usuario ='$id_usuario'";
    
    $inserir = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)){
        $_SESSION['msg'] = "<script>alert('Usuário alterado com sucesso.')</script>";
        header("Location: consulta-usuarios.php");
    }else{
        $_SESSION['msg'] = "<script>alert('Erro ao alterar.');</script>";
        return false;
        header("Location: editar-usuario.php?id_usuario=$id_usuario");
    }
    

?>
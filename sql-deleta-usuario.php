<?php
    session_start();
    include_once 'conexao.php';

    $id = filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);
    $deleta_usuario = "DELETE FROM usuarios WHERE id_usuario='$id'";
    $resultado_deleta_usuario = mysqli_query($conn, $deleta_usuario);

    if(mysqli_affected_rows($conn)){
        $_SESSION['msg'] = "<script>alert('Usuário excluido com sucesso.')</script>";
        header("Location: consulta-usuarios.php");
    }else{
        $_SESSION['msg'] = "<script>alert('Erro ao excluir usuário.');</script>";
        header("Location: consulta-usuarios.php");
    }

?>
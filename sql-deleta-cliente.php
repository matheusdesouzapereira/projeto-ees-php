<?php
    session_start();
    include_once 'conexao.php';

    $id = filter_input(INPUT_GET, 'id_cliente', FILTER_SANITIZE_NUMBER_INT);
    $deleta_cliente = "DELETE FROM clientes WHERE id_cliente='$id'";
    $resultado_deleta_cliente = mysqli_query($conn, $deleta_cliente);

    if(mysqli_affected_rows($conn)){
        $_SESSION['msg'] = "<script>alert('Cliente excluido com sucesso.')</script>";
        header("Location: consulta-clientes.php");
    }else{
        $_SESSION['msg'] = "<script>alert('Erro ao excluir cliente.');</script>";
        header("Location: consulta-clientes.php");
    }

?>
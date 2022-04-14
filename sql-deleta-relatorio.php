<?php
    session_start();
    include_once 'conexao.php';

    $id = filter_input(INPUT_GET, 'id_servico', FILTER_SANITIZE_NUMBER_INT);
    $deleta_servico = "DELETE FROM servicos WHERE id_servico='$id'";
    $resultado_deleta_servico = mysqli_query($conn, $deleta_servico);

    if(mysqli_affected_rows($conn)){
        $_SESSION['msg'] = "<script>alert('Serviço excluido com sucesso.')</script>";
        header("Location: consulta-relatorios.php");
    }else{
        $_SESSION['msg'] = "<script>alert('Erro ao excluir serviço.');</script>";
        header("Location: consulta-relatorios.php");
    }

?>
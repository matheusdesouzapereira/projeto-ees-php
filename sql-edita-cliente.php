<?php

session_start();
include_once 'conexao.php';

$id_cliente         = $_POST['id_cliente'];
$nome               = $_POST['nome'];
$nome_empresa       = $_POST['nome_empresa'];
$cpf_cnpj           = $_POST['cpf_cnpj'];
$endereco           = $_POST['endereco'];
$numero             = $_POST['numero'];
$bairro             = $_POST['bairro'];
$cep                = $_POST['cep'];
$telefone           = $_POST['telefone'];
$celular            = $_POST['celular'];
$site               = $_POST['site'];
$observacoes        = $_POST['observacoes'];

/* Nível de acesso 1 = Administrador */
/* Nível de acesso 2 = Assistente   */

/* Alterar Usuário */

    $sql = "UPDATE clientes SET nome='$nome', nome_empresa='$nome_empresa', cpf_cnpj='$cpf_cnpj',endereco='$endereco',numero='$numero',bairro='$bairro',cep='$cep',telefone='$telefone',celular='$celular',site='$site',observacoes='$observacoes' WHERE id_cliente='$id_cliente'";
    
    $inserir = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)){
        $_SESSION['msg'] = "<script>alert('Cliente alterado com sucesso.')</script>";
        header("Location: consulta-cliente.php");
    }else{
        $_SESSION['msg'] = "<script>alert('Erro ao alterar.');</script>";
        return false;
        header("Location: editar-cliente.php?id_cliente=$id_cliente");
    }
    

?>
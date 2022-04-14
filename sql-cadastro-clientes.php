<?php

session_start();
include_once 'conexao.php';

$nome                    = $_POST['nome'];
$nome_empresa            = $_POST['nome_empresa'];
$cpf_cnpj                = $_POST['cpf_cnpj'];
$endereco                = $_POST['endereco'];
$numero                  = $_POST['numero'];
$bairro                  = $_POST['bairro'];
$cep                     = $_POST['cep'];
$telefone                = $_POST['telefone'];
$celular                 = $_POST['celular'];
$site                    = $_POST['site'];
$observacoes             = $_POST['observacoes'];

$data                    = date("Y-m-d H:i:s");

/* Cadastramento */
$sql = "INSERT INTO clientes (nome, nome_empresa, cpf_cnpj, endereco, numero, bairro, cep, telefone, celular, site, observacoes, data_cadastro) VALUES (
    '$nome',
    '$nome_empresa',
    '$cpf_cnpj',
    '$endereco',
    '$numero',
    '$bairro',
    '$cep',
    '$telefone',
    '$celular',
    '$site',
    '$observacoes',
    '$data'
    )";

$inserir = mysqli_query($conn, $sql);

$gravar = mysqli_affected_rows($conn);

if($gravar == 1){
    $_SESSION['msg'] = "<script>alert('Cliente cadastrado com sucesso.')</script>";
    header("Location: cadastro-clientes.php");
}else{
    $_SESSION['msg'] = "<script>alert('Erro ao cadastrar.');</script>";
    header("Location: cadastro-clientes.php");
}
    
?>
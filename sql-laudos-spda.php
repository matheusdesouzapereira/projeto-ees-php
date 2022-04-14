<?php

session_start();
include_once 'conexao.php';

$titulo_servico         = $_POST['titulo_servico'];
$objetivo               = $_POST['objetivo'];
$tituloItem2            = $_POST['tituloItem2'];
$tituloItem2_implode    = implode(",",$tituloItem2);
$descricaoItem2         = $_POST['descricaoItem2'];
$descricaoItem2_implode = implode(",",$descricaoItem2);
$tituloItem3            = $_POST['tituloItem3'];
$tituloItem3_implode    = implode(",",$tituloItem3);
$descricaoItem3         = $_POST['descricaoItem3'];
$descricaoItem3_implode = implode(",",$descricaoItem3);
$data_execucao          = $_POST['data_execucao'];
$preco                  = $_POST['preco'];
$pecas_materiais        = $_POST['pecas_materiais'];
$condicoes_pagamento    = $_POST['condicoes_pagamento'];
$tabela_hh              = $_POST['tabela_hh'];

$tipo_servico = "2"; 
/* 1 = Manutencao Preditiva */
/* 2 = Laudos SPDA */
/* 3 = Laudos de NR-10 */
/* 4 = Instalações Eléticas */
/* 5 = Correções de F.P */
/* 6 = Estudos de Correções e Seletividade */
$status_servico = $_POST['status_servico']; 
/* Se 1 = Proposta | Se 2 =  Ordem de Serviço | Se 3 = Relatório*/

$data                   = date("Y-m-d H:i:s");

/* Cadastramento */
$sql = "INSERT INTO servicos (titulo_servico,objetivo,tituloItem2,descricaoItem2,tituloItem3,descricaoItem3,data_execucao,preco,pecas_materiais,condicoes_pagamento,tabela_hh,tipo_servico,status_servico,data_cadastro) VALUES (
    '$titulo_servico',
    '$objetivo',
    '$tituloItem2_implode',
    '$descricaoItem2_implode',
    '$tituloItem3_implode',
    '$descricaoItem3_implode',
    '$data_execucao',
    '$preco',
    '$pecas_materiais',
    '$condicoes_pagamento',
    '$tabela_hh',
    '$tipo_servico',
    '$status_servico',
    '$data'
    )";

$inserir = mysqli_query($conn, $sql);

$gravar = mysqli_affected_rows($conn);

if($gravar == 1){
    $_SESSION['msg'] = "<script>alert('Serviço cadastrado com sucesso.')</script>";
    header("Location: cadastro-laudos-spda.php");
}else{
    $_SESSION['msg'] = "<script>alert('Erro ao cadastrar serviço.');</script>";
    header("Location: cadastro-laudos-spda.php");
}
?>
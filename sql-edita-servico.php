<?php

session_start();
include_once 'conexao.php';

$id_servico                = $_POST['id_servico'];
$titulo_servico            = $_POST['titulo_servico'];
$objetivo                  = $_POST['objetivo'];
$tituloItem2               = $_POST['tituloItem2_modificado'];
$tituloItem2_implode       = implode(",",$tituloItem2);
$descricaoItem2            = $_POST['descricaoItem2_modificado'];
$descricaoItem2_implode    = implode(",",$descricaoItem2);
$tituloItem3               = $_POST['tituloItem3_modificado'];
$tituloItem3_implode       = implode(",",$tituloItem3);
$descricaoItem3            = $_POST['descricaoItem3_modificado'];
$descricaoItem3_implode    = implode(",",$descricaoItem3);
$data_execucao             = $_POST['data_execucao'];
$preco                     = $_POST['preco'];
$pecas_materiais           = $_POST['pecas_materiais'];
$condicoes_pagamento       = $_POST['condicoes_pagamento'];
$tabela_hh                 = $_POST['tabela_hh'];

/* Nível de acesso 1 = Administrador */
/* Nível de acesso 2 = Assistente   */

/* Alterar Servico */

    $sql = "UPDATE servicos SET 

    titulo_servico='$titulo_servico', 
    objetivo='$objetivo',
    tituloItem2='$tituloItem2_implode',
    descricaoItem2='$descricaoItem2_implode',
    tituloItem3='$tituloItem3_implode',
    descricaoItem3='$descricaoItem3_implode',
    data_execucao='$data_execucao', 
    preco='$preco', 
    pecas_materiais='$pecas_materiais', 
    condicoes_pagamento='$condicoes_pagamento', 
    tabela_hh='$tabela_hh' 

    WHERE id_servico ='$id_servico'";
    
    $inserir = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)){
        $_SESSION['msg'] = "<script>alert('Serviço alterado com sucesso.')</script>";
        header("Location: sistema-ees.php");
    }else{
        $_SESSION['msg'] = "<script>alert('Erro ao alterar.');</script>";
        return false;
        header("Location: sistema-ees.php");
    }
    

?>
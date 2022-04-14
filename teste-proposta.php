<?php

    session_start();
    include_once 'conexao.php';
    
    
    $id_servico = filter_input(INPUT_GET, 'id_servico', FILTER_SANITIZE_NUMBER_INT);
    $seleciona_servico = "SELECT * FROM servicos WHERE id_servico = '13'";
    $servico_selecionado = mysqli_query($conn, $seleciona_servico);
    $row_servico = mysqli_fetch_assoc($servico_selecionado);
    
    
    $tituloItem2 = $row_servico['tituloItem2'];
    $tituloItem2_array = (explode(",",$tituloItem2));

    $descricaoItem2 = $row_servico['descricaoItem2'];
    $descricaoItem2_array = (explode(",",$descricaoItem2));



    for($i= 0;$i < count($tituloItem2_array);$i++ ){
        echo $tituloItem2_array[$i] . "<br>";
        echo $descricaoItem2_array[$i] . "<br>";
    }
   
    

?>
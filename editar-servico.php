<?php
    session_start();
    include_once 'conexao.php';
    include 'header.php';

    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset ($_SESSION['msg']);
    }
    
    $id_servico = filter_input(INPUT_GET, 'id_servico', FILTER_SANITIZE_NUMBER_INT);
    $seleciona_servico = "SELECT * FROM servicos WHERE id_servico = '$id_servico'";
    $servico_selecionado = mysqli_query($conn, $seleciona_servico);
    $row_servico = mysqli_fetch_assoc($servico_selecionado);

    /* Array's */
    $tituloItem2 = $row_servico['tituloItem2'];
    $tituloItem2_array = (explode(",",$tituloItem2));

    $descricaoItem2 = $row_servico['descricaoItem2'];
    $descricaoItem2_array = (explode(",",$descricaoItem2));
    
    $tituloItem3 = $row_servico['tituloItem3'];
    $tituloItem3_array = (explode(",",$tituloItem3));

    $descricaoItem3 = $row_servico['descricaoItem3'];
    $descricaoItem3_array = (explode(",",$descricaoItem3));

    
?>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     
      <!-- Conteúdo à direita da página-->

      <div class="conteudo">
          <h1>EDITAR SERVIÇO</h1>
          <form action="sql-edita-servico.php" method="post" class="formulario">
          <input type="hidden" name="id_servico" class="input_form" value="<?php echo $row_servico['id_servico']?>">
            <select name="status_servico" class="input_form">
                <option value="1">Proposta</option>
                <option value="2">Ordem de Serviço</option>
                <option value="3">Relatório</option>
            </select>
            <br>
            <input type="text" name="titulo_servico" class="input_form" placeholder="Título do serviço" value="<?php echo $row_servico['titulo_servico']?>">
            <input type="text" name="objetivo" class="input_form" placeholder="Objetivo" value="<?php echo $row_servico['objetivo']?>">
            
            <h2 class="subtitulo_proposta">ESCOPO DE SERVIÇOS A SER EXECUTADO PELA CONTRATADA</h2>
            
            <div id="adicionaItem2">
                <div>
                    <p class="item">ITEM 2.0</p>    
                    <?php for($i=0;$i < count($tituloItem2_array);$i++ ){ ?>
                    
                    <div class="modificado2">
                        <p><input type="text" class="input_form input-item" name="tituloItem2_modificado[]" placeholder="Título do Item" value="<?php echo $tituloItem2_array[$i]; ?>"> </p>
                        <textarea class="input_form_textarea" name="descricaoItem2_modificado[]" rows="10" placeholder="Descrição do item"><?php echo $descricaoItem2_array[$i]; ?></textarea>
                        <p class="remove"><a href="#">REMOVER</a></p>
                    </div>
                    
                    <?php } ?>      
                </div>
            </div>

            <p class="btn-adicionar"><input type="button" class="btn-add" id="add_divitem2_modificado" value="ADICIONAR"></p>
            
            <h2 class="subtitulo_proposta">ESCOPO TÉCNICO DOS SERVIÇOS:</h2>
            
            <div id="adicionaItem3">
                <div>
                    <p class="item">ITEM 3.0</p>
                    <?php for($i= 0;$i < count($tituloItem3_array);$i++ ){ ?>
                    
                    <div class="modificado3">
                        <p><input type="text" class="input_form input-item" name="tituloItem3_modificado[]" placeholder="Título do Item" value="<?php echo $tituloItem3_array[$i]; ?>"> </p>
                        <textarea class="input_form_textarea" name="descricaoItem3_modificado[]" rows="10" placeholder="Descrição do item"><?php echo $descricaoItem3_array[$i]; ?></textarea>
                        <p class="remove"><a href="#">REMOVER</a></p>
                    </div>
                
                    <?php } ?>         
                </div>
            </div>

            <p class="btn-adicionar"><input type="button" class="btn-add" id="add_divitem3_modificado" value="ADICIONAR"></p>
            
            <input type="text" name="data_execucao" class="input_form" placeholder="Data de execução do serviço" value="<?php echo $row_servico['data_execucao']?>">
            <input type="text" name="preco" class="input_form" placeholder="Preço" onInput="mascaraMoeda(event);" value="<?php echo $row_servico['preco']?>">
            <textarea class="input_form_textarea" name="pecas_materiais" rows="10" placeholder="Peças e Materiais para Reposição"><?php echo $row_servico['pecas_materiais']?></textarea>
            <input type="text" name="condicoes_pagamento" class="input_form w10" placeholder="Condições de pagamento" value="<?php echo $row_servico['condicoes_pagamento']?>">
            <textarea class="input_form_textarea" name="tabela_hh" rows="10" placeholder="Tabela HH de 2ª a 6ª feira no horário comercial"><?php echo $row_servico['tabela_hh']?></textarea>
            <br>
            
            <input class="btn_cadastrar" type="submit" value="ALTERAR">
          </form>
      </div>



<?php
    include 'footer.php';
?>     

    

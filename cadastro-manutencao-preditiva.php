<?php
    session_start();
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset ($_SESSION['msg']);
    }
    include 'header.php';
?>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     
      <!-- Conteúdo à direita da página-->

      <div class="conteudo">
          <h1>NOVA SERVIÇO DE MANUTENÇÃO PREDITIVA</h1>
          <form action="sql-manutencao-preditiva.php" method="post" class="formulario">
            <select name="status_servico" class="input_form">
                <option value="1">Proposta</option>
                <option value="2">Ordem de Serviço</option>
                <option value="3">Relatório</option>
            </select>
            <br>
            <input type="text" name="titulo_servico" class="input_form" placeholder="Título do serviço">
            <input type="text" name="objetivo" class="input_form" placeholder="Objetivo">
            
            <h2 class="subtitulo_proposta">ESCOPO DE SERVIÇOS A SER EXECUTADO PELA CONTRATADA</h2>
            
            <div id="adicionaItem2">
                <div>
                <p class="item">ITEM 2.0</p>
                <p><input type="text" class="input_form input-item" name="tituloItem2[]" placeholder="Título do Item"/> </p>
                <textarea class="input_form_textarea" name="descricaoItem2[]" rows="10" placeholder="Descrição do item"></textarea>
                </div>
            </div>

            <p class="btn-adicionar"><input type="button" class="btn-add" id="add_divitem2" value="ADICIONAR"></p>
            
            <h2 class="subtitulo_proposta">ESCOPO TÉCNICO DOS SERVIÇOS:</h2>
            
            <div id="adicionaItem3">
                <div>
                <p class="item">ITEM 3.0</p>
                <p><input type="text" class="input_form input-item" name="tituloItem3[]" placeholder="Título do Item"/> </p>
                <textarea class="input_form_textarea" name="descricaoItem3[]" rows="10" placeholder="Descrição do item"></textarea>
                </div>
            </div>

            <p class="btn-adicionar"><input type="button" class="btn-add" id="add_divitem3" value="ADICIONAR"></p>
            
            <input type="text" name="data_execucao" class="input_form" placeholder="Data de execução do serviço">
            <input type="text" name="preco" class="input_form" placeholder="Preço" onInput="mascaraMoeda(event);">
            <textarea class="input_form_textarea" name="pecas_materiais" rows="10" placeholder="Peças e Materiais para Reposição"></textarea>
            <input type="text" name="condicoes_pagamento" class="input_form w10" placeholder="Condições de pagamento">
            <textarea class="input_form_textarea" name="tabela_hh" rows="10" placeholder="Tabela HH de 2ª a 6ª feira no horário comercial"></textarea>
            <br>
            <input class="btn_cadastrar" type="submit" value="CADASTRAR">
          </form>
      </div>



<?php
    include 'footer.php';
?>     

    

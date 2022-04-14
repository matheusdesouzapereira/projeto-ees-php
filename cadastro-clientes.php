<?php
    session_start();
    include 'header.php';
?>
      
      <!-- Conteúdo à direita da página-->

      <div class="conteudo">
          <h1>NOVO CLIENTE</h1>
          <form action="sql-cadastro-clientes.php" method="post" class="formulario" name="form">
            <?php
                if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
                }
            ?>
            <input type="text" name="nome" class="input_form" placeholder="Nome Completo">
            <input type="text" name="nome_empresa" class="input_form" placeholder="Nome da empresa">
            <input type="text" name="cpf_cnpj" class="input_form" placeholder="CPF | CNPJ">
            <input type="text" name="endereco" class="input_form" placeholder="Endereço">
            <input type="text" name="numero" class="input_form" placeholder="Número">
            <input type="text" name="bairro" class="input_form" placeholder="Bairro">
            <input type="text" name="cep" class="input_form" placeholder="CEP">
            <input type="text" name="telefone" class="input_form" placeholder="Telefone" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);">
            <input type="text" name="celular" class="input_form" placeholder="Celular" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);">
            <input type="text" name="site" class="input_form" placeholder="Site">
            <textarea class="input_form_textarea" name="observacoes" rows="10" maxlength="255" placeholder="Observções (Limite de 255 caracteres)"></textarea>
            <br>
            <input class="btn_cadastrar" type="submit" value="CADASTRAR">
          </form>
      </div>



<?php
    include 'footer.php';
?>     

    

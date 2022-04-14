<?php
    session_start();
    include_once 'conexao.php';
    include 'header.php';

    $id_cliente = filter_input(INPUT_GET, 'id_cliente', FILTER_SANITIZE_NUMBER_INT);
    $seleciona_cliente = "SELECT * FROM clientes WHERE id_cliente = '$id_cliente'";
    $cliente_selecionado = mysqli_query($conn, $seleciona_cliente);
    $row_cliente = mysqli_fetch_assoc($cliente_selecionado);
?>
      
      <!-- Conteúdo à direita da página-->

      <div class="conteudo">
          <h1>NOVO CLIENTE</h1>
          <form action="sql-edita-cliente.php" method="post" class="formulario" name="form">
            <?php
                if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
                }
            ?>
            <input type="hidden" name="id_cliente" class="input_form" value="<?php echo $row_cliente['id_cliente']?>">
            <input type="text" name="nome" class="input_form" placeholder="Nome Completo" value="<?php echo $row_cliente['nome']?>">
            <input type="text" name="nome_empresa" class="input_form" placeholder="Nome da empresa" value="<?php echo $row_cliente['nome_empresa']?>">
            <input type="text" name="cpf_cnpj" class="input_form" placeholder="CPF | CNPJ" value="<?php echo $row_cliente['cpf_cnpj']?>">
            <input type="text" name="endereco" class="input_form" placeholder="Endereço" value="<?php echo $row_cliente['endereco']?>">
            <input type="text" name="numero" class="input_form" placeholder="Número" value="<?php echo $row_cliente['numero']?>">
            <input type="text" name="bairro" class="input_form" placeholder="Bairro" value="<?php echo $row_cliente['bairro']?>">
            <input type="text" name="cep" class="input_form" placeholder="CEP" value="<?php echo $row_cliente['cep']?>">
            <input type="text" name="telefone" class="input_form" placeholder="Telefone" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="<?php echo $row_cliente['telefone']?>">
            <input type="text" name="celular" class="input_form" placeholder="Celular" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="<?php echo $row_cliente['celular']?>">
            <input type="text" name="site" class="input_form" placeholder="Site" value="<?php echo $row_cliente['site']?>">
            <textarea class="input_form_textarea" name="observacoes" rows="10" maxlength="255" placeholder="Observções (Limite de 255 caracteres)"><?php echo $row_cliente['observacoes']?></textarea>
            <br>
            <input class="btn_cadastrar" type="submit" value="ATUALIZAR">
          </form>
      </div>



<?php
    include 'footer.php';
?>     

    

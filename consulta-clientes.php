<?php
    session_start();
    include_once 'conexao.php';
    include 'header.php';
?>
      <meta charset="UTF-8">
      <!-- Conteúdo à direita da página-->

      <div class="conteudo">
          <h1>CONSULTAR CLIENTES</h1>
          <form action="" method="post" class="formulario">
            <input type="text" name="nome_empresa" class="input_form" placeholder="Nome da empresa">
            <br>
            <input class="btn_cadastrar" name="consultarClientes" type="submit" value="CONSULTAR">
            <input class="btn_cadastrar" name="consultarTodos" type="submit" value="VER TODOS">
          </form>
            <div class="area-resultado">
                <h1>RESULTADOS</h1>
                
                <!-- Pesquisa todos os usuários -->

                <?php
                
                $consultarTodos = filter_input(INPUT_POST, 'consultarTodos', FILTER_SANITIZE_STRING);

                if($consultarTodos){
                    $result_clientes = "SELECT * FROM clientes";
                    $resultado_clientes = mysqli_query($conn, $result_clientes);
                    
                ?> 
                <?php while($row_clientes = mysqli_fetch_assoc($resultado_clientes)){ ?>
                
                    <div class="resultado">
                    <div class="informacoes">
                        <p>ID: <?php echo $row_clientes['id_cliente']; ?></p>
                        <p>Nome: <?php echo $row_clientes['nome']; ?></p>
                        <p>Empresa: <?php echo $row_clientes['nome_empresa']; ?></p>
                        <p>CPF: <?php echo $row_clientes['cpf_cnpj']; ?></p>
                        <p>Endereço: <?php echo $row_clientes['endereco']; ?>, <?php echo $row_clientes['numero']; ?> - <?php echo $row_clientes['bairro']; ?></p>
                        <p>CEP: <?php echo $row_clientes['cep']; ?></p>
                        <p>Cel: <?php echo $row_clientes['celular']; ?></p>
                        <p>Site:<?php echo $row_clientes['site']; ?></p>
                    </div>
                    <div class="botoes">
                        <?php echo "<a href='editar-cliente.php?id_cliente=". $row_clientes['id_cliente'] ."'><input type='submit' class='btn-editar' value='EDITAR'></a>" ?>
                        <?php echo "<a href='sql-deleta-cliente.php?id_cliente=". $row_clientes['id_cliente'] ."'><input type='submit' class='btn-excluir' value='EXCLUIR' onclick='return confirmaExclusao();'></a>" ?>
                    </div>
                </div>  
                
                <?php } ?>
                <?php } ?>

                <!-- Pesquisa caso coloque condições -->
                
                <?php
                
                $consultarClientes = filter_input(INPUT_POST, 'consultarClientes', FILTER_SANITIZE_STRING);

                if($consultarClientes){
                    $nome_empresa = filter_input(INPUT_POST, 'nome_empresa', FILTER_SANITIZE_STRING);
                    $result_clientes = "SELECT * FROM clientes WHERE nome_empresa LIKE '%$nome_empresa%'";
                    $resultado_clientes = mysqli_query($conn, $result_clientes);
                    
                ?> 
                <?php while($row_clientes = mysqli_fetch_assoc($resultado_clientes)){ ?>
                
                    <div class="resultado">
                    <div class="informacoes">
                        <p>ID: <?php echo $row_clientes['id_cliente']; ?></p>
                        <p>Nome: <?php echo $row_clientes['nome']; ?></p>
                        <p>Empresa: <?php echo $row_clientes['nome_empresa']; ?></p>
                        <p>CPF: <?php echo $row_clientes['cpf_cnpj']; ?></p>
                        <p>Endereço: <?php echo $row_clientes['endereco']; ?>, <?php echo $row_clientes['numero']; ?> - <?php echo $row_clientes['bairro']; ?></p>
                        <p>CEP: <?php echo $row_clientes['cep']; ?></p>
                        <p>Cel: <?php echo $row_clientes['celular']; ?></p>
                        <p>Site:<?php echo $row_clientes['site']; ?></p>
                    </div>
                    <div class="botoes">
                        <?php echo "<a href='editar-cliente.php?id_cliente=". $row_clientes['id_cliente'] ."'><input type='submit' class='btn-editar' value='EDITAR'></a>" ?>
                        <?php echo "<a href='sql-deleta-cliente.php?id_cliente=". $row_clientes['id_cliente'] ."'><input type='submit' class='btn-excluir' value='EXCLUIR' onclick='return confirmaExclusao();'></a>" ?>
                    </div>
                </div>  
                
                <?php } ?>
                <?php } ?>

                

                                            
            </div>
        </div>



<?php
    include 'footer.php';
?>     

    

<?php
    session_start();
    include_once 'conexao.php';
    include 'header.php';
?>
      <meta charset="UTF-8">
      <!-- Conteúdo à direita da página-->

      <div class="conteudo">
          <h1>CONSULTAR RELATÓRIOS</h1>
          <form action="" method="post" class="formulario">
            <input type="text" name="titulo_servico" class="input_form" placeholder="Título do serviço">
            <select name="tipo_servico">
                <option value="1">Manutencao Preditiva</option>
                <option value="2">Laudos SPDA</option>
                <option value="3">Laudos de NR-10</option>
                <option value="4">Instalações Eléticas</option>
                <option value="5">Correções de F.P</option>
                <option value="6">Estudos de Correções e Seletividade</option>
                <option value="7">Ensaios de epi's e epc's</option>
            </select>
            <br>
            <input class="btn_cadastrar" name="consultarPropostas" type="submit" value="CONSULTAR">
            <input class="btn_cadastrar"  name="consultarTodos" type="submit" value="VER TODOS">
          </form>
            <div class="area-resultado">
                <h1>RESULTADOS</h1>

                <!-- Pesquisa todos as propostas -->

                <?php
                
                $consultarTodos = filter_input(INPUT_POST, 'consultarTodos', FILTER_SANITIZE_STRING);

                if($consultarTodos){
                    $titulo_servico = filter_input(INPUT_POST, 'titulo_servico', FILTER_SANITIZE_STRING);
                    $result_servicos = "SELECT * FROM servicos WHERE status_servico LIKE '3'";
                    $resultado_servicos = mysqli_query($conn, $result_servicos);
                    
                ?> 
                <?php while($row_servicos = mysqli_fetch_assoc($resultado_servicos)){ 
                $tipo_servico_case = $row_servicos['tipo_servico'];
                ?>
                
                    <div class="resultado">
                    <div class="informacoes">
                        <p>ID: <?php echo $row_servicos['id_servico']; ?></p>
                        <p>Título do serviço: <?php echo $row_servicos['titulo_servico']; ?></p>
                        <p>Objetivo: <?php echo $row_servicos['objetivo']; ?></p>
                        <p>Data da execução: <?php echo $row_servicos['data_execucao']; ?></p>
                        <p>Preço: <?php echo $row_servicos['preco']; ?></p>
                    </div>
                    <div class="botoes">
                        <?php echo "<a href='gerar-pdf.php?id_servico=". $row_servicos['id_servico'] ."' target='_blank'><input type='submit' class='btn-visualizar' value='VISUALIZAR'></a>" ?>
                        <?php echo "<a href='editar-servico.php?id_servico=". $row_servicos['id_servico'] ."'><input type='submit' class='btn-editar' value='EDITAR'></a>" ?>
                        <?php echo "<a href='sql-deleta-relatorio.php?id_servico=". $row_servicos['id_servico'] ."'><input type='submit' class='btn-excluir' value='EXCLUIR' onclick='return confirmaExclusao();'></a>" ?>
                    </div>
                </div>  
                
                <?php } ?>
                <?php } ?>
                
                <!-- Pesquisa todos as propostas com filtro-->

                <?php
                
                $consultarPropostas = filter_input(INPUT_POST, 'consultarPropostas', FILTER_SANITIZE_STRING);

                if($consultarPropostas){
                    $titulo_servico = filter_input(INPUT_POST, 'titulo_servico', FILTER_SANITIZE_STRING);
                    $tipo_servico = filter_input(INPUT_POST, 'tipo_servico', FILTER_SANITIZE_STRING);
                    $result_servicos = "SELECT * FROM servicos WHERE status_servico LIKE '3' AND titulo_servico like '%$titulo_servico%' AND tipo_servico LIKE '%$tipo_servico%'";
                    $resultado_servicos = mysqli_query($conn, $result_servicos);
                    
                ?> 
                <?php while($row_servicos = mysqli_fetch_assoc($resultado_servicos)){ ?>
                
                    <div class="resultado">
                    <div class="informacoes">
                        <p>ID: <?php echo $row_servicos['id_servico']; ?></p>
                        <p>Título do serviço: <?php echo $row_servicos['titulo_servico']; ?></p>
                        <p>Objetivo: <?php echo $row_servicos['objetivo']; ?></p>
                        <p>Data da execução: <?php echo $row_servicos['data_execucao']; ?></p>
                        <p>Preço: <?php echo $row_servicos['preco']; ?></p>
                    </div>
                    <div class="botoes">
                        <?php echo "<a href='gerar-pdf.php?id_servico=". $row_servicos['id_servico'] ."' target='_blank'><input type='submit' class='btn-visualizar' value='VISUALIZAR'></a>" ?>
                        <?php echo "<a href='editar-servico.php?id_servico=". $row_servicos['id_servico'] ."'><input type='submit' class='btn-editar' value='EDITAR'></a>" ?>
                        <?php echo "<a href='sql-deleta-relatorio.php?id_servico=". $row_servicos['id_servico'] ."'><input type='submit' class='btn-excluir' value='EXCLUIR' onclick='return confirmaExclusao();'></a>" ?>
                    </div>
                </div>  
                
                <?php } ?>
                <?php } ?>
                                    
            </div>
        </div>



<?php
    include 'footer.php';
?>     

    

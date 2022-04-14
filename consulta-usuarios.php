<?php
    session_start();
    include_once 'conexao.php';
    include 'header.php';
?>
      <meta charset="UTF-8">
      <!-- Conteúdo à direita da página-->

        <div class="conteudo">
          <h1>CONSULTAR USUÁRIOS</h1>
          <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
            }
            $result_usuarios = "SELECT * FROM usuarios";
            $resultado_usuarios = mysqli_query($conn, $result_usuarios);
            
          ?>
            <div class="area-resultado">
                <!-- <h1>RESULTADOS</h1> -->
                
                <?php while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){ 
                $tipo_usuario =  $row_usuario['nivel_acesso'];
                if($tipo_usuario == 1){
                    $resultado_usuario = "Administrador";
                }else{
                    $resultado_usuario = "Assistente";
                }    
                
                ?>
                
                <div class="resultado">
                    <div class="informacoes">
                        <p>ID: <?php echo $row_usuario['id_usuario']; ?></p>
                        <p>Nome: <?php echo $row_usuario['nome']; ?></p>
                        <p>Usuário: <?php echo $row_usuario['usuario']; ?></p>
                        <p>Tipo: <?php echo $resultado_usuario; ?></p>
                    </div>
                    <div class="botoes">
                        <?php echo "<a href='editar-usuario.php?id_usuario=". $row_usuario['id_usuario'] ."'><input type='submit' class='btn-editar' value='EDITAR'></a>" ?>
                        <?php echo "<a href='sql-deleta-usuario.php?id_usuario=". $row_usuario['id_usuario'] ."'><input type='submit' class='btn-excluir' value='EXCLUIR' onclick='return confirmaExclusao();'></a>" ?>
                    </div>
                </div>

                <?php }?>
      
            </div>
        </div>

<?php
    include 'footer.php';
?>     

    

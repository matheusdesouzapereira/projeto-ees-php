<?php
    session_start();
    include_once 'conexao.php';
    include 'header.php';
    
    $id_usuario = filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);
    $seleciona_usuario = "SELECT * FROM usuarios WHERE id_usuario = '$id_usuario'";
    $usuario_selecionado = mysqli_query($conn, $seleciona_usuario);
    $row_usuario = mysqli_fetch_assoc($usuario_selecionado);
?>
      
      <!-- Conteúdo à direita da página-->

      <div class="conteudo">
          <h1>EDITAR USUÁRIO</h1>
          <form action="sql-edita-usuario.php" method="post" class="formulario" name="form">
            <?php
                if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
                }
            ?>
            <input type="hidden" name="id_usuario" class="input_form" value="<?php echo $row_usuario['id_usuario']?>">

            <input type="text" name="nome" class="input_form" placeholder="Nome Completo" value="<?php echo $row_usuario['nome']?>">
            <input type="text" name="usuario" class="input_form" placeholder="Nome de usuário" value="<?php echo $row_usuario['usuario']?>">
            <input type="password" name="senha" class="input_form" placeholder="Senha de acesso" value="">
            <input type="password" name="confirmarSenha" class="input_form" placeholder="Confirmar senha" value="">
            <select name="nivel_acesso">
                <option value="1">Administrador</option>
                <option value="2">Assistente</option>
            </select>
            <br>
            <input class="btn_cadastrar" type="submit" value="ATUALIZAR" onclick="return validarSenha()">
          </form>
      </div>



<?php
    include 'footer.php';
?>     

    

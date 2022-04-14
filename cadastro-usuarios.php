<?php
    session_start();
    include 'header.php';
?>
      
      <!-- Conteúdo à direita da página-->

      <div class="conteudo">
          <h1>NOVO USUÁRIO</h1>
          <form action="sql-cadastro-usuarios.php" method="post" class="formulario" name="form">
            <?php
                if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
                }
            ?>
            <input type="text" name="nome" class="input_form" placeholder="Nome Completo" value="">
            <input type="text" name="usuario" class="input_form" placeholder="Nome de usuário" value="">
            <input type="password" name="senha" class="input_form" placeholder="Senha de acesso" value="">
            <input type="password" name="confirmarSenha" class="input_form" placeholder="Confirmar senha" value="">
            <select name="nivel_acesso">
                <option value="1">Administrador</option>
                <option value="2">Assistente</option>
            </select>
            <br>
            <input class="btn_cadastrar" type="submit" value="CADASTRAR" onclick="return validarSenha()">
          </form>
      </div>



<?php
    include 'footer.php';
?>     

    

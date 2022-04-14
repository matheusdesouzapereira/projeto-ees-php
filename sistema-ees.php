<?php
    session_start();
    include_once 'conexao.php';
    include 'header.php';

    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset ($_SESSION['msg']);
    }
?>
      <?php
        /* Total de servicos */
        $query_servicos = "SELECT * FROM servicos";
        $executa_query_servicos = mysqli_query($conn, $query_servicos);
        $conta_servicos = mysqli_num_rows($executa_query_servicos);
        
        /* Total de propostas */
        $query_proposta = "SELECT * FROM servicos WHERE status_servico = 1";
        $executa_query_proposta = mysqli_query($conn, $query_proposta);
        $conta_proposta = mysqli_num_rows($executa_query_proposta);
        
        /* Total de ordem de serviço */
        $query_os = "SELECT * FROM servicos WHERE status_servico = 2";
        $executa_query_os = mysqli_query($conn, $query_os);
        $conta_os = mysqli_num_rows($executa_query_os);
        
        /* Total de relatorios */
        $query_relatorios = "SELECT * FROM servicos WHERE status_servico = 3";
        $executa_query_relatorios = mysqli_query($conn, $query_relatorios);
        $conta_relatorios = mysqli_num_rows($executa_query_relatorios);

        /* Total de clientes */
        $query_clientes = "SELECT * FROM clientes";
        $executa_query_clientes = mysqli_query($conn, $query_clientes);
        $conta_clientes = mysqli_num_rows($executa_query_clientes);

        /* Total de Usuários */
        $query_usuarios = "SELECT * FROM usuarios";
        $executa_query_usuarios = mysqli_query($conn, $query_usuarios);
        $conta_usuarios = mysqli_num_rows($executa_query_usuarios);
      
      ?>
      <!-- Conteúdo à direita da página-->

      <div class="conteudo">
          <h1>DASHBOARD EES</h1>

          <div class="boxes-info">
            <div class="box-info">
                <h2>Serviços</h2>
                <p><?php echo $conta_servicos;?></p> 
            </div>
            <div class="box-info">
                <h2>Propostas</h2>
                <p><?php echo $conta_proposta;?></p> 
            </div>
            <div class="box-info">
                <h2>O.S</h2>
                <p><?php echo $conta_os;?></p>    
            </div>
            <div class="box-info">
                <h2>Relatórios</h2>
                <p><?php echo $conta_relatorios;?></p>    
            </div>
            <div class="box-info">
                <h2>Clientes</h2>
                <p><?php echo $conta_clientes;?></p>   
            </div>
            <div class="box-info">
                <h2>Usuários</h2>
                <p><?php echo $conta_usuarios;?></p>   
            </div>
          </div>
      </div>



<?php
    include 'footer.php';
?>     

    

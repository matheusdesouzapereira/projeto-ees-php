<?php
  include_once 'conexao.php';
  
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Sistema | E&E Sistemas Eléticos</title>   
</head>
<body>
    
    <!-- Menu -->
      <div class="menu">
        <img class="botaoMenu" src="img/Botão-menu.png" alt="Botão menu">
        <img class="botaoMenu2" src="img/Botão-menu.png" alt="Botão menu">
        <div class="conteudoMenu">
        <a href="sistema-ees.php"><img class="logo" src="img/logo-branco.png" alt="Logo EES"></a>
          <p class="usuario">Usuário Logado<!-- : <span class="nomeUsuario">matheus.pereira</span> --><span class="logout"><a href="logout.php">Sair</a></span></p>
          <ul class="menuPrincipal">
            <li class="menuTitulo">Cadastrar</li>
              <ul class="submenu">
                <a href="cadastro-usuarios.php"><li>Usuário</li></a>
                <a href="cadastro-clientes.php"><li>Cliente</li></a>
                <a href="cadastro-servico.php"><li>Serviço</li></a>
              </ul>
            <li class="menuTitulo">Consultar</li>
              <ul class="submenu">
                <a href="consulta-usuarios.php"><li>Usuários</li></a>
                <a href="consulta-clientes.php"><li>Clientes</li></a>
                <a href="consulta-propostas.php"><li>Propostas</li></a>
                <a href="consulta-os.php"><li>O.S</li></a>
                <a href="consulta-relatorios.php"><li>Relatórios</li></a>
              </ul>
          </ul>
        </div>
      </div>

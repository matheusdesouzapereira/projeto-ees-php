<?php
    session_start();
    include_once 'conexao.php';
?>
      
      <!-- Conteúdo à direita da página-->
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E&S Sistemas Elétricos - Login</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap');
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Roboto';
            }
            :root{
                --fundo: #020c1c;
                --menu: #182840;
                --cinza-claro: #e7e5e5;
            }
            body{
                background-image: url('img/background.jpg');
            }
            .container {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .logo{
                width: 250px;
            }
            .box-login{
                background-color: rgba(0,0,0,.5);
                padding: 30px;
                text-align: center;
                width: 40%;
                margin-top: 120px;
            }
            .box-login img{
                width: 250px;
                margin-bottom: 15px;
            }
            .box-login h1{
                color: #fff;
            }
            .box-login input{
                border: none;
                padding: 15px;
                margin-top: 10px;
                margin-bottom: 10px;
                width: 80%;
                font-size: 18px;
                background-color: var(--cinza-claro);
            }
            @media screen and (max-width:1000px){
                .box-login{
                    width: 80%;
                    padding-top: 50px;
                    padding-bottom: 50px;
                }
            }
            @media screen and (max-width:700px){
                .box-login{
                    width: 100%;
                    height: 100vh;
                    margin-top: 0px !important;
                    padding-top: 100px;
                }
            }
            
        </style>
    </head>
    <body>
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
            }
        ?>
        <div class="container">
            <div class="box-login">
                <img src="img/logo-branco.png" alt="">
                <form action="valida.php" method="post">
                    <h1>LOGIN</h1>
                    <p><input type="text" name="usuario" style="margin-top:20px;" placeholder="Usuário"></p>
                    <p><input type="password" name="senha" value="" placeholder="Senha"></p>
                    <p><input type="submit" value="ENTRAR" value=""></p>
                </form>
            </div>
        </div>
    </body>
    </html>


    

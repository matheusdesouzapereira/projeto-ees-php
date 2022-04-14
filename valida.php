<?php
    session_start();
    include_once 'conexao.php';

    if((isset($_POST['usuario'])) &&  (isset($_POST['senha']))){
        $usuario = mysqli_real_escape_string($conn, $_POST['usuario']); // Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
        $senha = base64_encode($senha);
        
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' && senha = '$senha' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $resultado = mysqli_fetch_assoc($result);
        /* $nivel_acesso = $row_usuario['nivel_acesso']; */
        
        if(empty($resultado)){
            $_SESSION['msg'] = "<script>alert('Usuário e senha inválidos.');</script>";
            header("Location: index.php");  
        }else if(isset($resultado)){
            header("Location: sistema-ees.php"); 
        }else{
            $_SESSION['msg'] = "<script>alert('Usuário e senha inválidos.');</script>";
            header("Location: index.php");
        }
        
    }else{
        $_SESSION['msg'] = "<script>alert('Usuário e senha inválidos.');</script>";
        header("Location: index.php");
    }


?>
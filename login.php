<?php
    session_start();
    include 'conecta.php';
    $login = preg_replace('/[^[:alpha:]_]/','', $_POST['login']);
    $senha = preg_replace('/[^[:alpha:]_]/','', $_POST['senha']);
    $logar = mysqli_query($conn, "SELECT * FROM usuario WHERE login='$login' AND senha='$senha'");
    if(mysqli_num_rows($logar)>0){
        $_SESSION["user"] = $_POST['login'];
        $dados = mysqli_fetch_assoc($logar);
        header("location:sis.php");
    }
    else {
        echo "<script>alert('Login ou senha incorreto!');</script>";
        echo "<script>window.location.replace('index.php');</script>";
    }
    mysqli_close($conn);
?>
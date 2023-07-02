<?php
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    include("bdconnection.php");

    $pdo = conection();
    $sql = $pdo->prepare("SELECT admin FROM usuario WHERE email_usuario = ?");
    $sql->execute(array($_SESSION['email']));

    $admin = $sql->fetchColumn(); 

    if($admin == 1)
    {
        echo "<script>alert('Não é permitido deletar uma conta de administrador');";
        echo "javascript:window.location='../profile.php';</script>";
    }
    else{

        $sql = $pdo->prepare("DELETE FROM usuario WHERE email_usuario = ?");
        $sql->execute(array($_SESSION['email']));

        echo "<script>alert('Conta deletada.');";
        echo "javascript:window.location='../profile.php';</script>";
        header("Location:../index.html");
        session_destroy();
        exit();
    }
?>
<?php
    include("bdconnection.php");
    $pdo = conection();

    session_start();

    if(isset($_POST['senha']))
    {
        $sql = $pdo->prepare("UPDATE usuario SET senha_usuario = ? WHERE email_usuario = ?");
        $sql->execute(array($_POST['senha'], $_SESSION['email']));

        echo "<script>alert('Senha atualizada.');";
        echo "javascript:window.location='perfil.php';</script>";
        header("location: ../profile.php");
    }

?>
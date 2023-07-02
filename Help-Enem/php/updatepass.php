<?php 
    include("bdconnection.php");
    $pdo = conection();

    if(session_status() !== PHP_SESSION_ACTIVE)
        session_start();
            
            
    if(isset($_POST['senha']) AND isset($_POST['senha2']))
    {
        $sql = $pdo->prepare("SELECT COUNT(*) FROM  usuario WHERE senha_usuario = ? AND email_usuario = ?");
        $sql->execute(array($_POST['senha2'], $_SESSION['upemail']));

        $n = $sql->fetchColumn();

        if($n == 1){
            echo "<script>alert('Senha digitada é igual a antiga, digite corretamente');";
            echo "javascript:window.location='../recuperarsenha.html';</script>";
        }
        else{
        $sql = $pdo->prepare("UPDATE usuario SET senha_usuario = ? WHERE email_usuario = ?");
        $sql->execute(array($_POST['senha2'], $_SESSION['upemail']));
        $sql = $pdo->prepare("DELETE FROM Relembra WHERE id_usuario=?");
        $sql->execute(array($_SESSION['idU']));
        header("Location:../index.html");
    }
    }
?>
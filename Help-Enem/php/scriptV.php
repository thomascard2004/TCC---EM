<?php 
include("bdconnection.php");
$pdo = conection();

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

    $sql=$pdo->prepare("SELECT COUNT(*) FROM Relembra WHERE codigo = ? AND id_usuario = ?");
    $sql->execute(array($_POST['code'], $_SESSION['idU']));

    $numero_linhas = $sql->fetchColumn();

    if($numero_linhas == 1){
        header("Location: ../recuperarsenha.html");
    }

    else{
    echo "<script>alert('Código inválido');";
    echo "javascript:window.location='../verificacao.html';</script>";
    }
?>
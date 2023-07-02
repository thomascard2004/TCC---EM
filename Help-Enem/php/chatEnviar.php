<?php

    if(session_status() !== PHP_SESSION_ACTIVE)
        session_start();


    date_default_timezone_set('America/Sao_Paulo');


    $nome = $_SESSION['nome'];
    $email = $_SESSION['email'];
    $hora = date('H:i:s');
    $mensagem = $_POST['caixa_texto'];

    $pdo = new PDO('mysql:host=localhost;dbname=help_enem', 'root', '');
    //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_POST['caixa_texto'])){
        $sql = $pdo->prepare("INSERT INTO mensagens (id_mensagem, nome_mensagem, email_mensagem, mensagem_mensagem, hora_mensagem) VALUES(null, ?, ?, ?, ?)");
        $sql->execute(array($nome, $email, $mensagem, $hora));
    }

    echo json_encode('Mensagem enviada!');

?>
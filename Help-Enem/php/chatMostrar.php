<?php

    $pdo = new PDO('mysql:host=localhost;dbname=help_enem', 'root', '');

    $array = array();

    $sql = $pdo->prepare("SELECT * FROM (SELECT * FROM mensagens ORDER BY id_mensagem DESC LIMIT 5) sub ORDER BY id_mensagem ASC");
    $sql->execute();

    $fetch = $sql->fetchAll();

    foreach($fetch as $value)
    {
        array_push($array, '('.$value['hora_mensagem'].') <br><strong>'.$value['email_mensagem'].'</strong>: '.$value['mensagem_mensagem'].'<br><br>');
    }

    echo json_encode($array);
?>
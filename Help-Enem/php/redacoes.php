<?php

    include("bdconnection.php");
    $cont = 0;

    $pdo = conection();

    $ano = $_GET['ano'];


    $sql = $pdo->prepare("SELECT tema_redacao, autor_redacao, intro_redacao, desen1_redacao, desen2_redacao, concl_redacao FROM 
    redacao WHERE id_prova = ?");
    $sql->execute(array($ano));
   
    
    echo json_encode($sql->fetchAll(PDO::FETCH_ASSOC));

?>
<?php 
/*Arquivo responsável pelo cadastro de questões*/

include("bdconnection.php");
$pdo = conection();

    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start(); 
    }
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    try{
        if(isset($_POST['txtEnunciado']) AND isset($_POST['txtAltA']) AND isset($_POST['txtAltB']) AND 
        isset($_POST['txtAltC']) AND isset($_POST['txtAltD']) AND isset($_POST['txtAltE']) AND
        isset($_POST['txtResolucao']) AND isset($_POST['AltCorreta']) AND isset($_POST['Ano']) AND isset($_POST['Disciplina']))
        {
            $sql = $pdo->prepare("INSERT INTO questoes (id_questao, enunciado_questao, altA_questao, 
            altB_questao, altC_questao, altD_questao, altE_questao, altCerta_questao, resolucao_questao, 
            id_usuario, id_prova, id_disciplina, dificuldade) VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            
            $sql->execute(array($_POST['txtEnunciado'], $_POST['txtAltA'], $_POST['txtAltB'], $_POST['txtAltC'],
            $_POST['txtAltD'], $_POST['txtAltE'], $_POST['AltCorreta'], $_POST['txtResolucao'], $_SESSION['id'], 
            $_POST['Ano'], $_POST['Disciplina'], $_POST['dificuldade']));
            header("Location:../administracao.php");
        }
    }
    catch(PDOException $e){
        die($e->getMessage());
    }

?>
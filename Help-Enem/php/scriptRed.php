<?php   
/*Arquivo responsável pelo cadastro de redações*/
include("bdconnection.php");

    $pdo = conection();
   if(session_status() !== PHP_SESSION_ACTIVE)
    {   
        session_start();
    }

    $pdo = new PDO('mysql:host=localhost;dbname=help_enem', 'root', '');

    try{
        if(isset($_POST['Prova']) AND isset($_POST['txtAutor']) AND isset($_POST['txtTema']) AND isset($_POST['txtIntroducao']) AND 
        isset($_POST['txtD1']) AND isset($_POST['txtD2']) AND isset($_POST['txtConclusao']))
        {
            $sql = $pdo->prepare("INSERT INTO redacao(id_redacao, autor_redacao, tema_redacao, intro_redacao, desen1_redacao, 
            desen2_redacao, concl_redacao, id_usuario, id_prova) VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?)");
            $sql->execute(array($_POST['txtAutor'], $_POST['txtTema'], $_POST['txtIntroducao'], $_POST['txtD1'], $_POST['txtD2'], $_POST['txtConclusao'],  $_SESSION['id'], $_POST['Prova']));
            header("Location:../administracao.php");
        }
    }
    catch(PDOException $e){
        die($e->getMessage());
    }
?>
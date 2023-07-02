<?php 
    /* Arquivo responsável pelo login(index.html)*/
    include("bdconnection.php");
    $pdo = conection();

    if(isset($_POST['email']) AND isset($_POST['senha']))
        {
            $sql = $pdo->prepare("SELECT COUNT(*) FROM usuario WHERE email_usuario = ? AND senha_usuario = ?");
            $sql->execute(array($_POST['email'], $_POST['senha']));

            $numero_linhas = $sql->fetchColumn();

            if($numero_linhas == 1)
            {
                if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                    $_SESSION['login'] = true;
                }

                $sql = $pdo->prepare("SELECT id_usuario FROM usuario WHERE email_usuario = ? AND senha_usuario = ?");
                $sql->execute(array($_POST['email'], $_POST['senha']));

                $_SESSION['id'] = $sql->fetchColumn(); 
        
                $sql = $pdo->prepare("SELECT nome_usuario FROM usuario WHERE email_usuario = ? AND senha_usuario = ?");
                $sql->execute(array($_POST['email'], $_POST['senha']));

                $_SESSION['nome'] = $sql->fetchColumn(); 

                $_SESSION['email'] = $_POST['email'];
                $_SESSION['senha'] = $_POST['senha'];

                $sql = $pdo->prepare("SELECT admin FROM usuario WHERE email_usuario = ? AND senha_usuario = ?");
                $sql->execute(array($_SESSION['email'], $_SESSION['senha']));

                $EhAdmin = $sql->fetchColumn(); 

                if($EhAdmin == true)
                {
                    $_SESSION['admin'] = 1;
                    header("Location:../administracao.php");
                }
                else
                    header("Location:../center.php");
                }
                else
                {
                    echo "<script>alert('Login inválido, tente novamente.');";
                    echo "javascript:window.location='../index.html';</script>";
                }
    }
?>
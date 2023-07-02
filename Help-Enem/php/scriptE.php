<?php 

    include("bdconnection.php");
    $pdo = conection();

    if(session_status() !== PHP_SESSION_ACTIVE)
    session_start();

    /*requisição*/
    require_once('src/PHPMailer.php');
    require_once('src/SMTP.php');
    require_once('src/Exception.php');
    /*bibliotecas para acesso das classes*/
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    $_SESSION['upemail'] = $_POST['email'];
    
    $mail = new PHPMailer(true);

    try{

        $sql = $pdo->prepare("SELECT email_usuario FROM usuario WHERE email_usuario=?");
        $sql->execute(array($_POST['email']));

        $cont = $sql->rowCount();

        if($cont == 1)
        {

            $mail->SMTPDebug = SMTP::DEBUG_SERVER;

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'helpenemltda@gmail.com';
            $mail->Password = 'enemhelp123';
            $mail->Port = 587;

            $mail->setFrom('helpenemltda@gmail.com');
            $mail->addAddress($_POST['email']);

            $code = rand(1, 6000);
            $mail->isHTML(true);
            $mail->Subject = 'Code';
            $mail->Body='Código de verificação: '.$code;
            $mail->AltBody='chegou';

            if($mail->send()){
                $sql = $pdo->prepare("SELECT id_usuario FROM usuario WHERE email_usuario=?");
                $sql->execute(array($_POST['email']));

                $id = $sql->fetchColumn();

                $sql = $pdo->prepare("INSERT INTO Relembra(id_usuario, codigo) VALUES(?, ?)");
                $sql->execute(array($id, $code));
                $_SESSION['idU'] = $id;
                header("Location:../verificacao.html");
            }

            else{
                echo "<script>alert('Não foi possível enviar email.');";
                echo "javascript:window.location='esqueceuasenha.html';</script>";
                //header("Location:../esqueceuasenha.html");
            }
        }
        else
        {
            echo "<script>alert('Não foi possível enviar email.');";
            echo "javascript:window.location='../esqueceuasenha.html';</script>";
            //header("Location:../esqueceuasenha.html");
        }
    }
    catch(Exception $e){
        //echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
        echo "<script>alert('Não foi possível enviar email.');";
        echo "javascript:window.location='esqueceuasenha.html';</script>";
    }
?>

    

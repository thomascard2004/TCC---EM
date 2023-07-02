<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="js/script.js"></script>
        <title> Cadastro </title>
        <link rel="short icon" type="imagex/pngp" href="img/logo.ico">
        <link href = "css/styleC.css" rel ="stylesheet" type= "text/css">
    </head>
    <body>
        <?php 
            require_once("cadastro.php");
            $pdo = new PDO('mysql:host=localhost;dbname=help_enem', 'root', '');
            
            if(isset($_POST['nomeCompleto']) AND isset($_POST['email']) AND isset($_POST['senha']))
            {
                $sql = $pdo->prepare("SELECT COUNT(*) FROM usuario WHERE email_usuario = ?");
                $sql->execute(array($_POST['email']));

                $numero_linhas = $sql->fetchColumn();

                if($numero_linhas != 0)
                {
                    echo "<script>alert('Email já cadastrado');";
                    echo "javascript:window.location='cadastro.php';</script>";
                }
                else{
                    $sql = $pdo->prepare("INSERT INTO usuario(id_usuario, nome_usuario, email_usuario, senha_usuario, admin) VALUES(null, ?, ?, ?, false)");
                    $sql->execute(array($_POST['nomeCompleto'], $_POST['email'], $_POST['senha']));
                    header("Location:./index.html");
                }
            }
        ?>

        <img id="logo" src="img/Help.png" draggable="false">
        <div id="content">
            <h1> Cadastro </h1>
        <form id="frm" method="POST" name="frm_login"  action="cadastro.php" >
            <label class ="lbl"> Nome Completo</label><br>
            <div class= "input-field">
            <input class ="input" type="text" name="nomeCompleto" id="nome" placeholder="Digite seu nome.."><br>
            <div class="underline"></div></div><br>

            <label class ="lbl"> E-mail</label><br>
            <div class= "input-field">
            <input class="input" id="email" type="email" name="email" placeholder="Digite seu email..."><br>
            <div class="underline"></div></div><br>

            
            <label class ="lbl"> Senha</label><br>
            <div class= "input-field">
            <input class="input" id="senha" type="password" placeholder="Digite sua senha..." name="senha" ><br>
            <div class="underline"></div></div><br>

            <label class ="lbl"> Digite a senha novamente </label><br>
            <div class= "input-field">
            <input class="input" id="senhaC" type="password" placeholder="Digite sua senha..." name="senha2"><br>
            <div class="underline"></div></div><br>
            <p id="alerta"></p>
            <a href="index.html"><input type="button" class ="botao" id="botao2" name="voltar" value="Voltar"></a>
            <input type="button" class ="botao" id="enviar" name="logar" value="Cadastrar" onclick="Cadastro()">
        </form>
        <p id="alerta"></p>
    </div>
    </body>
</html>
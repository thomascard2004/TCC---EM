<?php
    /*if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
        header("location: ./index.html");
        exit;
    }*/
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="css/profile.css" rel="stylesheet" type="text/css">
    <link rel="short icon" type="imagex/pngp" href="img/logo.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <title>Conta</title>
</head>

<body>
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="img/avatar_chat.png" class="img-radius" alt="User-Profile-Image"> </div>
                                <?php
                                     session_start();
                                     if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
                                         header("location: ./index.html");
                                         exit;
                                     }
                                 
                                    $email = $_SESSION['email'];
                                    $name = $_SESSION['nome'];
                                    echo '<h6 class="f-w-600">'.$name.'</h6>';
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Informações</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <?php 
                                            echo '<h6 class="text-muted f-w-400">'.$email.'</h6> '
                                        ?>
                                    </div>
                                    <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Senha</p>
                                        <input class="buttons" id="btn_update" type="button" value="Trocar senha" onclick="ShowForm()"><br>
                                        <form id="frm_update" method="POST" action="php/account.php">
                                            <label>Digite sua nova senha</label><br>
                                            <div class="input-field">
                                            <input id="pass" type="password" name="senha">
                                            <div class="underline"></div> 
                                            </div><br>
                                            <p id="alert"></p>
                                            <input id="buttonU" type="button" value="Atualizar" onclick="Update()">
                                        </form>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Controles</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                    <form method="POST" action="php/deleteuser.php">
                                        <input class="buttons" id="btn_delete" type="submit" value="Deletar conta"><br>
                                    </form>
                                    <a href="./center.php"><input class="buttons" type="button" value="Voltar"></a>
                                    <form method="POST" action="php/exit.php">
                                        <input class="buttons" id="btn_exit" type="submit" value="Sair"><br>
                                    </form>
                                    </div>
                                    <div class="col-sm-6">
                                        
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
</body>

</html>

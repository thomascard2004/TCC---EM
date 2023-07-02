<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <link rel="short icon" type="imagex/pngp" href="img/logo.ico">
    <link href="css/main.css" rel="stylesheet">
    <title>Help Enem</title>
</head>

<body>
    <?php 
        session_start();
        if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
            header("location: ./index.html");
            exit;
        }
    ?>
    <div id="header" class="active">
        <div id="container">
            <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html"><img src="img/Help.png" draggable="false"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <div id="desc">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#" onclick="OpenD()">Sobre</a>
                            </li></div>
                            <div id="chat">
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="OpenChat()"><img class="img" draggable="false" src="img/chat.png">Chat Interativo</a>
                            </li></div>
                            <div id="exam">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" onclick="OpenE()">
                                    <img class="img" draggable="false" src="img/checklist.png"> Exames
                                </a>
                            </li></div>
                            <div id="redacoes">
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img class="img" draggable="false" src="img/contract.png" onclick="OpenR()"> Redações
                                </a>
                            </li></div>
                            <li class="nav-item">
                                <a class="nav-link" href="profile.php"><img class="img" draggable="false" src="img/avatar2.png">Perfil</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <iframe id="red" src="redacao.php"></iframe>
    <iframe id="chatI" src="chat.php"></iframe>
    <iframe id="description"  src="desc.html"></iframe>
    <iframe id="exames" src="exames.html"></iframe>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
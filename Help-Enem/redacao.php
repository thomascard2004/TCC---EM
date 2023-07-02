<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="short icon" type="imagex/pngp" href="img/logo.ico">
    <link href="css/redacao.css" rel="stylesheet" type="text/css">
    <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
    <!--<script src="js/jquery-3.6.0.min.js"></script>-->
    <script src="js/ajax.js"></script>
    <title>Redação</title>
</head>

<body>

    <div id="content">
        <form>
            <select name="redacoes">
                <option value="1">ENEM 2018</option>
                <option value="2">ENEM 2019</option>
                <option value="3">ENEM 2020</option>
            </select>
            <input type="button" id="btn" value="Ler">
        </form>

    </div>

    <div id="conteudo"></div>

    <br>

    <input type="button" id="ant" value="Anterior">
    <input type="button" id="prox" value="Próximo">
</body>

</html>
<?php
        session_start();
        if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
            header("location: index.html");
            exit;
        }
        if($_SESSION['admin'] != 1)
        header("location: center.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="short icon" type="imagex/pngp" href="img/logo.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/styleAdmin.css">
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/admin.js"></script>
    <title>Administração</title>
</head>

<body>
    <div id="content">

    <h3>Administração</h3>
        <!--Tem erro aqui-->
    <a href="center.php"><input type="button" value="Home" id="btn_home"></a>
    <input type="button" value="Cadastrar questões" name="btn_cadQ" id="btn_quest" onclick="ShowQuest()">
    <input type="button" value="Cadastrar redações" name="btn_cadR" id="btn_red" onclick="ShowRed()">

    <div id="frm_red">
    <form id="form_red" name="frm_red" action="php/scriptRed.php" method="POST">
        <label class="label">Selecione o ENEM</label><br>
        <select name="Prova">
            <option value="1">ENEM 2018</option>
            <option value="2">ENEM 2019</option>
            <option value="3">ENEM 2020</option>
        </select><br><br><br>
        <label class="lbl">Autor(a)</label><br><input class="inputRed" id="Autor" placeholder="Ex.: Ana Beatriz" name="txtAutor"><br><br>
        <label class="lbl">Tema</label><br><input type="text" class="inputRed" id="Tema" placeholder="Ex: O estigma associado a doenças mentais" name="txtTema"><br><br>
        <label class="lbl">Introdução</label><br><textarea class="inputR" id="Intro" placeholder="Ex.: Na série..." name="txtIntroducao"></textarea><br><br>
        <label class="lbl">D1</label><br><textarea class="inputR" id="D1" placeholder="Ex.: Primeiramente..." name="txtD1"></textarea><br><br>
        <label class="lbl">D2</label><br><textarea class="inputR" id="D2" placeholder="Ex.: Além disso..." name="txtD2"></textarea><br><br>
        <label class="lbl">Conclusão</label><br><textarea class="inputR" id="Conc" placeholder="Ex.: Torna-se evidente..." name="txtConclusao"></textarea><br><br>
        <p id="alertR"></p><br>
        <input class="btnF" type="button" name="btnRed" id="btnRed" value="Gravar redação" onclick="ValidationR()">
    </form>
    </div><br><br>

    <div id="frm_quest">
    <form id="frm_prova" action="php/scriptProva.php" method="POST">

        <label class="lbl">Selecione o ENEM</label><br>
        <select id="Exame" name="Ano">
            <option value="1">ENEM 2018</option>
            <option value="2">ENEM 2019</option>
            <option value="3">ENEM 2020</option>
        </select><br><br><br>

        <label class="lbl">Selecione a disciplina</label><br>
        <select id="Disciplinas" name="Disciplina">
            <option value="4">Matemática e suas Tecnologias</option>
            <option value="3">Ciências da Natureza e suas Tecnologias</option>
            <option value="2">Ciências Humanas e suas Tecnologias</option>
            <option value="1">Linguagens, Códigos e suas Tecnologias</option>
        </select><br><br><br>

        <label class="lbl">Enunciado</label><br><textarea id="enun" class="inputQ" name="txtEnunciado"></textarea><br><br>

        <label>Alternativa A</label><br> <textarea id="opA" class="inputQ" name="txtAltA"></textarea><br><br>
        <label>Alternativa B</label><br> <textarea id="opB" class="inputQ" name="txtAltB"></textarea><br><br>
        <label>Alternativa C</label><br> <textarea id="opC" class="inputQ" name="txtAltC"></textarea><br><br>
        <label>Alternativa D</label><br> <textarea id="opD" class="inputQ" name="txtAltD"></textarea><br><br>
        <label>Alternativa E</label><br> <textarea id="opE" class="inputQ" name="txtAltE"></textarea><br><br><br>

        <label class="lbl">Alternativa correta</label><br><br>
        <input type="radio" name="AltCorreta" value="A"> Alternativa A
        <input type="radio" name="AltCorreta" value="B"> Alternativa B
        <input type="radio" name="AltCorreta" value="C"> Alternativa C
        <input type="radio" name="AltCorreta" value="D"> Alternativa D
        <input type="radio" name="AltCorreta" value="E"> Alternativa E <br><br><br>
        
        <label class="lbl">Resolução</label><br><textarea id="resolucao" class="inputQ" name="txtResolucao"></textarea><br><br><br>

        <label>Nível de dificuldade </label><br><br>
        <input type="radio" name="dificuldade" value="F"> Fácil
        <input type="radio" name="dificuldade" value="M"> Médio
        <input type="radio" name="dificuldade" value="D"> Difícil<br><br>
        <p id="AlertP"></p><br>
        <input id="btnExam" class="btnF" type="button" value="Gravar questão" onclick="ValidationE()">
    </form>
    </div>
    </div>
</body>
</html>
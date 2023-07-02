<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="../css/questoes.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/exames.js"></script>
    <title>Exames</title>
</head>

<body>
    <div class="container mt-sm-5 my-1">
    <div class="question ml-sm-5 pl-sm-5 pt-2">
    <?php
    include("bdconnection.php");

    $pdo = conection();

    $cont = 0;

    $prova = $_POST['exames'];
    if($prova == 1){
        $enem = 'ENEM 2018';
    }
    if($prova == 2){
        $enem = 'ENEM 2019';
    }
    if($prova == 3){
        $enem = '2020';
    }    

    $area = $_POST['disciplina'];
    if($area == 1){
        $disciplina = 'Linguagens, Códigos e suas Tecnologias';
    }
    if($area == 2){
        $disciplina = 'Ciências Humanas e suas Tecnologias';
    }
    if($area == 3){
        $disciplina = 'Ciências da Natureza e suas Tecnologias';
    }
    if($area == 4){
        $disciplina = 'Matemática e suas Tecnologias';
    }

    $descricao = "<strong>Prova: </strong>".$enem." <br> <strong>Área: </strong>".$disciplina." ";

    $sql = $pdo->prepare("SELECT enunciado_questao, altA_questao, altB_questao, altC_questao, altD_questao, altE_questao, 
    altCerta_questao, resolucao_questao, dificuldade FROM questoes WHERE id_prova = ? AND id_disciplina = ?");
    $sql->execute(array($prova, $area));

    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);

    $altCerta = array();
    $resolucao = array();

    
   foreach($fetch as $value)
    {
        $altCerta [] = $value['altCerta_questao'];
        $resolucao [] = $value['resolucao_questao'];

        echo '<form name="prova">';

        if($value['dificuldade']=='M'){
            echo $descricao.'<p id="nivel"><strong>Dificuldade: </strong>Médio</p>';
        }
        if($value['dificuldade']=='D'){
            echo $descricao.'<p id="nivel"><strong>Dificuldade: </strong>Difícil</p>';
        }
        if($value['dificuldade']=='F'){
            echo $descricao.'<p id="nivel"><strong>Dificuldade: </strong>Fácil</p>';
        }
        echo '<div class="py-2 h5"><b>Q. '.$value['enunciado_questao'].'</b></div>';
        echo '<div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options"> 
        <label class="options">'.$value['altA_questao'].'<input type="radio" name="alt-'.$cont.'" value="A"><span class="checkmark"></span></label>';
        echo '<label class="options">'.$value['altB_questao'].'<input type="radio" name="alt-'.$cont.'" value="B"> <span class="checkmark"></span></label>';
        echo '<label class="options">'.$value['altC_questao'].'<input type="radio" name="alt-'.$cont.'" value="C"> <span class="checkmark"></span></label>';
        echo '<label class="options">'.$value['altD_questao'].'<input type="radio" name="alt-'.$cont.'" value="D"> <span class="checkmark"></span></label>';
        echo '<label class="options">'.$value['altE_questao'].'<input type="radio" name="alt-'.$cont.'" value="E"> <span class="checkmark"></span></label><br>';
        //echo $altCerta[$cont].'-'.$resolucao[$cont];
        echo '<p class="resolucao" style="display: none;">'.$altCerta[$cont].' - '.$resolucao[$cont].'</p><br><br>';
        $cont++;
    } 
    //echo '<div class="py-2 h5"><b>Q. '.$enunciado[0].'</b></div>';
        
?>
        <div class="d-flex align-items-center pt-3">
            <a href="../exames.html"><div class="ml-auto mr-sm-5"><input type="button" class="btn btn-primary" value="Voltar"></div></a>
            <div id="prev"> <button type="button" id="verificar" class="btn btn-success">Verificar</button> </div><br>
        </div>
        </form>
        </div>
    </div>
    </div>
</body>
</html>
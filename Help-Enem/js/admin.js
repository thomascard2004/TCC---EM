$(function ShowRed(val)
{
    $("#btn_red").click(function()
    {
        $("#form_red").css("display","block");
        $("#frm_prova").css("display", "none");
    });
});
$(function ShowQuest(val)
{
    $("#btn_quest").click(function()
    {
        $("#frm_prova").css("display", "block");
        $("#form_red").css("display","none");
        
    });
});

function ValidationR(){
    
    if(document.getElementById("Autor").value.length == 0 || document.getElementById("Tema").value.length == 0 || 
    document.getElementById("Intro").value.length == 0 || document.getElementById("D1").value.length == 0 || 
    document.getElementById("D2").value.length == 0 || document.getElementById("Conc").value.length == 0)
    {
        document.getElementById("alertR").innerHTML = "Por favor, preencha os campos corretamente";
        document.getElementById("btnRed").type = "button";
    }
    else{
        document.getElementById("btnRed").type = "submit";
    }
}
function ValidationE(){

    if(document.getElementById("resolucao").value.length == 0 || document.getElementById("opA").value.length == 0 ||
    document.getElementById("opB").value.length == 0 || document.getElementById("opC").value.length == 0 ||
    document.getElementById("opD").value.length == 0 || document.getElementById("opE").value.length == 0 || 
    document.getElementById("enun").value.length == 0 || document.getElementById("Exame").onselect)
    {
        document.getElementById("AlertP").innerHTML = "Por favor, preencha os campos corretamente.";
        document.getElementById("btnExam").type="button";
    }
    else{
        document.getElementById("btnExam").type="submit";
    }
}


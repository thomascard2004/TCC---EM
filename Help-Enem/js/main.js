/* Eventos com jquery*/
$(function OpenD(val)
{
    $("#desc").click(function()
    {
        $("#description").css("display","block");
        $("#red").css("display", "none");
        $("#exames").css("display", "none");
        $("#chatI").css("display", "none");
    });
});

$(function OpenR(val){
    $("#redacoes").click(function()
    {
        $("#red").css("display","block");
        $("#description").css("display","none");
        $("#exames").css("display", "none");
        $("#chatI").css("display", "none");
    });
});
$(function OpenE(val){
    $("#exam").click(function()
    {
        $("#exames").css("display", "block");
        $("#description").css("display","none");
        $("#red").css("display", "none");
        $("#chatI").css("display", "none");
    });
});



function Update(val){

    if(document.getElementById("pass").value.length == 0)
    {
        document.getElementById("alert").innerHTML = "Por favor, preencha o campo corretamente";
        document.getElementById("buttonU").type="button";
    }
    else{
        document.getElementById("buttonU").type="submit";
    }
}
$(function ShowAccount(val){
    $("#btn_select").click(function()
    {
        $("#dados").css("display", "block");
        $("#frm_update").css("display", "none");
    })
});

$(function ShowForm(val)
{
    $("#btn_update").click(function(){
        $("#frm_update").css("display", "block");
        $("#dados").css("display", "none");
    })
});
$(function OpenChat()
{
    $("#chat").click(function(){
        $("#chatI").css("display", "block");
        $("#description").css("display","none");
        $("#red").css("display", "none");
        $("#exames").css("display", "none");

    });
});

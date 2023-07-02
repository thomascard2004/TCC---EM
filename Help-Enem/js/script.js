function Validate(val)
{
    var email = document.getElementById("email");
    var senha = document.getElementById("senha");
    var botao = document.getElementById("botao");
    var alerta = document.getElementById("alerta");

    if(email.value.length == 0 || senha.value.length==0)
    {
        alerta.innerHTML = "Por favor, preencha os campos corretamente.";
        botao.type = "button";
    }
    else botao.type="submit"; 
}

function Cadastro(val)
{

    if(document.getElementById("nome").value.length == 0 || document.getElementById("senha").value.length == 0 || 
    document.getElementById("senhaC").value.length == 0 || document.getElementById("email").value.length == 0)
    {
        document.getElementById("alerta").innerHTML = "Por favor, preencha os campos corretamente.";
        document.getElementById("enviar").type = "button";
    }
    else if(senha.value != senhaC.value) 
    {
        document.getElementById("alerta").innerHTML = "Senhas incorretas, digite novamente.";
        document.getElementById("enviar").type = "button";
    }
    else document.getElementById("enviar").type = "submit"; 
}

function Verificar(val)
{
    var email = document.getElementById("email");
    var alerta = document.getElementById("Alerta");
    var button = document.getElementById("enviar");

    if(email.value == "")
    {
        alerta.innerHTML = "Por favor, digite um email";
        button.type="button";
    }
    else button.type = "submit";
}

function Alterar() {
	var senha = document.getElementById("senha1");
	var senhaC = document.getElementById("senha2");
	var alerta = document.getElementById("Alertar");
	var button = document.getElementById("Alterar");

	if (senha.value == " " || senhaC.value == " ") {
		alerta.innerHTML = "Por favor, preencha os campos";
		button.type = "button";
	} else if (senha.value != senhaC.value) {
		alerta.innerHTML = "Senhas incorretas, digite novamente";
		button.type = "button";
	} else button.type = "submit";
}

function Password(val)
{
    var senha = document.getElementById("senha");
    var password = document.getElementById("password");
        senha.type="text";
    password.addEventListener('mousedown', function(val){
        senha.type="text";
    });
    password.addEventListener('mouseup', function(val){
        senha.type="password";    
    });
    password.addEventListener('mousemove', function(val){
        senha.type="password"; 
    });
}
function CodeVerification(val){

    if(document.getElementById("code").value.length == 0){
        document.getElementById("alertC").innerHTML = "Por favor, digite um código";
        document.getElementById("button2").type = "button";
    }
    else document.getElementById("button2").type = "submit";
}
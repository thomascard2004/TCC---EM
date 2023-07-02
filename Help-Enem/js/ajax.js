/* Arquivo responsável pela manipulação dos dados para o html */

var tema = [];
var cont = 0;
var autor = [];
var introducao = [];
var d1 = [];
var d2 = [];
var conclusao = [];

$(document).ready(function() {

    $("#conteudo").hide();
    $("#prox").hide();
    $("#ant").hide();

    $('#btn').click(function(e) {

        cont = 0;

        tema = [];
        autor = [];
        introducao = [];
        d1 = [];
        d2 = [];
        conclusao = [];

        $("#conteudo").show();
        $("#prox").show();
        $("#ant").show();
        var $ano = $("[name = redacoes]")[0];

        $.getJSON('php/redacoes.php', {
            ano: $ano.value
        }, function(dados) {
            if (dados.length > 0) {
                j = -1;

                $.each(dados, function(i, obj) {
                    j++;
                    tema[j] = obj.tema_redacao;
                    autor[j] = obj.autor_redacao;
                    introducao[j] = obj.intro_redacao;
                    d1[j] = obj.desen1_redacao;
                    d2[j] = obj.desen2_redacao;
                    conclusao[j] = obj.concl_redacao;
                })

                $("#conteudo").html(function() {
                    return CarregaRedação();
                });


            } else {
                $('#mensagem').html('<span class="mensagem">Não foram encontradas turmas!</span>');
            }
        })
    })

    $('#prox').click(function(e) {

        cont++;
        if (cont < introducao.length) {

            $("#conteudo").html(function() {

                return CarregaRedação();

            });
        } else {
            alert('Acabaram as redações desse ano.');
            cont = introducao.length;
        }

    })

    $('#ant').click(function(e) {

        cont--;

        if (cont >= 0) {
            $("#conteudo").html(function() {

                return CarregaRedação();

            });
        } else {
            alert('Voltando para a primeira redação.')
            cont = 0;
        }

    })

});

function CarregaRedação() {
    return "<p><strong>" + tema[cont] + "</strong></p><p>" + autor[cont] + "</p><br><p>" + introducao[cont] + "</p><p>" + d1[cont] + "</p><p>" + d2[cont] + "</p><p>" + conclusao[cont] + "</p>";
}
$(document).ready(function() {

    var form = new FormData($("#form")[0]);

    $.ajax({
        url: '/TCC/HELP ENEM/php/chatMostrar.php',
        type: 'post',
        dataType: 'json',
        cache: false,
        processData: false,
        contentType: false,
        data: form,
        timeout: 8000,
        success: function(resultado) {
            $("#mensagens1").html(resultado[0]);
            $("#mensagens2").html(resultado[1]);
            $("#mensagens3").html(resultado[2]);
            $("#mensagens4").html(resultado[3]);
            $("#mensagens5").html(resultado[4]);
        },
        error: function() {
            $("#mensagens").html("Erro!")
        }
    });

    $('#enviar_mensagem').click(function() {
        var form = new FormData($("#form")[0]);
        $.ajax({
            url: '/TCC/HELP ENEM/php/chatEnviar.php',
            type: 'post',
            dataType: 'json',
            cache: false,
            processData: false,
            contentType: false,
            data: form,
            timeout: 8000,
            success: function(resultado) {
                alert(resultado);
                $.ajax({
                    url: '/TCC/HELP ENEM/php/chatMostrar.php',
                    type: 'post',
                    dataType: 'json',
                    cache: false,
                    processData: false,
                    contentType: false,
                    data: form,
                    timeout: 8000,
                    success: function(resultado) {
                        $("#mensagens1").html(resultado[0]);
                        $("#mensagens2").html(resultado[1]);
                        $("#mensagens3").html(resultado[2]);
                        $("#mensagens4").html(resultado[3]);
                        $("#mensagens5").html(resultado[4]);
                    },
                    error: function() {
                        $("#mensagens").html("Erro!")
                    }
                });
            },
            error: function() {
                alert('Erro em enviar mensagem!');

            }
        })
    });

});
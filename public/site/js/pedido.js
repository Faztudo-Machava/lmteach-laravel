$(function() {
    //reloadPedidos()

    $('#formPedido').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "/addPedido",
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            enctype: "multipart/form-data",
            beforeSend: function() {
                $('.load').removeClass('d-none')
            },
            complete: function() {
                $('.load').addClass('d-none')
            },
            success: function(response) {
                if (response.success === true) {
                    $('#pedidoMsg').removeClass('d-none').html(response.mensagem)
                } else {
                    $('#pedidoMsg').removeClass('d-none').html(response.mensagem)
                }
            }
        })
    })

    $('#formTrabResolvido').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "/enviarTrabalho",
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            enctype: "multipart/form-data",
            beforeSend: function() {
                $('.load').removeClass('d-none')
            },
            complete: function() {
                $('.load').addClass('d-none')
            },
            success: function(response) {
                if (response.success === true) {
                    $('#sucessoEnvioResolucao').removeClass('d-none')
                } else {
                    $('#errorEnvioResolucao').removeClass('d-none')
                }
            }
        })
    })

    function reloadPedidos() {
        $.ajax({
            url: "/procurarPedido",
            method: 'GET',
            dataType: 'json',
            processData: false,
            success: function(response) {
                console.log(response)
            }
        })
    }

    $('#tipo_pedido').change(function() {
        var selected = $('#tipo_pedido').val();
        if (selected != 3) {
            $('.pedidos').addClass('d-none')
            $(`.${selected}`).removeClass('d-none');
        } else {
            $('.pedidos').removeClass('d-none')
        }
    })
})
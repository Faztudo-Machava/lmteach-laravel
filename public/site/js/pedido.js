$(function() {
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
                console.log(response)
            }
        })
    })
})
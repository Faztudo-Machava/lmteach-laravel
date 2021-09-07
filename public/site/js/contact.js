$(function() {
    $('#contactForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "/enviarEmail",
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
                    $('#mailSuccess').removeClass('d-none')
                } else {
                    $('#mailFalha').removeClass('d-none')
                }
                console.log(response)
            }
        })
    })
})
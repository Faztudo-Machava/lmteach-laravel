$(function() {
    $('#formLogin').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "/login",
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            beforeSend: function() {
                $('.load').removeClass('d-none')
            },
            complete: function() {
                $('.load').addClass('d-none')
            },
            success: function(response) {
                console.log(response)
                if (response.success === true) {
                    window.location.href = "/usuario"
                } else {
                    $('#logError').removeClass('d-none').html(response.mensagem)
                }
            }
        })
    })


    $('#regCliente').submit(function(e) {
        e.preventDefault();
        var senha = $('#cli_senha').val()
        var csenha = $('#cli_csenha').val()
        if (senha != csenha) {
            $('#txtConfirm').addClass('animate__animated animate__bounce')
            $('#txtConfirm').removeClass('d-none')
            return
        }

        $.ajax({
            url: "/addicionarCliente",
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            beforeSend: function() {
                $('.load').removeClass('d-none')
            },
            complete: function() {
                $('.load').addClass('d-none')
            },
            success: function(response) {
                if (response.success === true) {
                    $('.messageBox').removeClass('d-none').html(response.mensagem)
                } else {
                    $('.messageBox').removeClass('d-none').html(response.mensagem)
                }
                console.log(response)
            }
        })
    })

    $('#regEspecialista').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: "/addicionarEspecialista",
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            beforeSend: function() {
                $('.load').removeClass('d-none')
            },
            complete: function() {
                $('.load').addClass('d-none')
            },
            success: function(response) {
                if (response.success === true) {
                    $('.espError').removeClass('d-none').html(response.mensagem)
                } else {
                    $('.espError').removeClass('d-none').html(response.mensagem)
                }
                console.log(response)
            }
        })
    })
})

//tabs
var tab1 = document.getElementById("tab1");
var tab2 = document.getElementById("tab2");
var tab3 = document.getElementById("tab3");

//set active step
tab1.style.display = "block";

//proximo btn
var next1 = document.getElementById('next1')
var next2 = document.getElementById('next2')

//anterior btn
var ant1 = document.getElementById('ante1')
var ant2 = document.getElementById('ante2')


next1.onclick = function() {

    var senha = $('#esp_senha').val()
    var csenha = $('#esp_csenha').val()
    var nome = $('#esp_nome').val()
    var email = $('#esp_email').val()
    var telefone = $('#esp_telefone').val()
    if (nome == "") {
        $('#esp_nome').focus();
        $('#esp_nome').css('border-color', 'red');
        $('#esp_nome').addClass('bounce');
    } else if (telefone == "") {
        $('#esp_telefone').focus();
        $('#esp_telefone').css('border-color', 'red');
        $('#esp_telefone').addClass('bounce');
    } else if (email == "") {
        $('#esp_email').focus();
        $('#esp_email').css('border-color', 'red');
        $('#esp_email').addClass('bounce');
    } else if (senha == "") {
        $('#esp_senha').focus();
        $('#esp_senha').css('border-color', 'red');
        $('#esp_senha').addClass('bounce');
    } else if (csenha == "") {
        $('#esp_csenha').focus();
        $('#esp_csenha').css('border-color', 'red');
        $('#esp_csenha').addClass('bounce');
    } else if (senha != csenha) {
        $('#txtEspConfirm').removeClass('d-none')
        return
    } else {
        $('#esp_nome').css('border-color', '');
        $('#esp_nome').removeClass('bounce');
        $('#esp_telefone').css('border-color', '');
        $('#esp_telefone').removeClass('bounce');
        $('#esp_email').css('border-color', '');
        $('#esp_email').removeClass('bounce');
        $('#esp_senha').css('border-color', '');
        $('#esp_senha').removeClass('bounce');
        $('#esp_csenha').css('border-color', '');
        $('#esp_csenha').removeClass('bounce');
        tab1.style.display = "none";
        tab2.style.display = "block";
    }

}


next2.onclick = function() {
    var instituicao = $('#esp_instituicao').val()
    var especialidade = $('#esp_especialidade').val()
    var estado = $('#esp_estado').val()
    if (instituicao == "") {
        $('#esp_instituicao').focus();
        $('#esp_instituicao').css('border-color', 'red');
        $('#esp_instituicao').addClass('bounce');
    } else if (especialidade == "") {
        $('#esp_especialidade').focus();
        $('#esp_especialidade').css('border-color', 'red');
        $('#esp_especialidade').addClass('bounce');
    } else if (estado == "") {
        $('#esp_estado').focus();
        $('#esp_estado').css('border-color', 'red');
        $('#esp_estado').addClass('bounce');
    } else {
        $('#esp_instituicao').css('border-color', '');
        $('#esp_instituicao').removeClass('bounce');
        $('#esp_especialidade').css('border-color', '');
        $('#esp_especialidade').removeClass('bounce');
        $('#esp_estado').css('border-color', '');
        $('#esp_estado').removeClass('bounce');
        tab2.style.display = "none";
        tab3.style.display = "block";
    }

}

ant1.onclick = function() {
    tab2.style.display = "none";
    tab1.style.display = "block";
}

ant2.onclick = function() {
    tab3.style.display = "none";
    tab2.style.display = "block";
}
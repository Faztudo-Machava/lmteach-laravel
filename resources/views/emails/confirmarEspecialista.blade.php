<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <div>
        <p>Oi {{$detalhes['nome']}}</p>
        <br><br>
        <p>Seja bem vindo ao lmteacher, uma plataforma com o objectivo de auxiliar aos estudantes na sua tarefa, porfavor confirme o seu email para prosseguir na plataforma.</p>
        <a href="{{route('home')}}/verificar?code={{$detalhes['verification_code']}}">Link de confirmação do email</a>
    </div> --}}
    <div class="bg-white row">
        <div class="text-center bg-principle py-4 text-center h3 text-white">
            LMTeacher
        </div>
        <div class="p-5">
            <h1>Mensagem para confirmação da inscrição de um especialista</h1>
            <div class="py-1">
                <h1>Dados do espcialista</h1>
                <p>Nome: {{$detalhes['user_nome']}}</p>
                <p>Especialidade: {{$detalhes['user_especialidade']}}</p>
                <p>Contacto: {{$detalhes['user_telefone']}}</p>
                <p>Nivel academico: {{$detalhes['esp_nivel']}}</p>
                <br>
                <a class="btn btn-principle text-white" href="{{route('home')}}/certificado?code={{$detalhes['verification_code']}}">Certificado</a>
                <br>
                <p>Já analisaou os dados e o certicado do especialista? caso sim <a class="btn btn-principle text-white" href="{{route('home')}}/confirmar?code={{$detalhes['verification_code']}}">Clica aqui </a> para confirmar a inscrição do especialista</p>
            </div>
            <div class="row flex-column mt-5">
                <div class="row">
                    <p class=""> <i class=" bi bi-geo-alt text-principle"></i> Maputo, av.24 de julho, 232</p>
                </div>
                <div class="">
                    <ul class=" navbar-nav flex-row">
                    <li class="nav-item"><a href="https://m.facebook.com/lmteach.studentshelper.7?ref=bookmarks"
                            target="blank" class="nav-link text-principle"><i class="bi bi-facebook fs-3 me-3"></i></a>
                    </li>
                    <li class="nav-item"><a href="https://chat.whatsapp.com/FjPNNWGVuJOBGnJ9A78U6u" target="blank"
                            class="nav-link text-principle"><i class="bi bi-whatsapp fs-3 me-3"></i></a></li>
                    <li class="nav-item"><a href="https://www.instagram.com/lmteach.inc/" target="blank"
                            class="nav-link text-principle"><i class="bi bi-instagram fs-3"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
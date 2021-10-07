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
            <h1>Mensagem de verificação do email</h1>
            <div class="py-1">
                <p>Oi {{$detalhes['nome']}},</p>
                <br>
                <p>Seja bem vindo ao lmteacher, uma plataforma com o objectivo de auxiliar aos estudantes na sua tarefa, porfavor confirme o seu email para prosseguir na plataforma.</p>
                <p>Caso seja da sua autoria <a class="btn btn-principle text-white" href="{{route('home')}}/verificar?code={{$detalhes['verification_code']}}">Confirmar do email</a></p>
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
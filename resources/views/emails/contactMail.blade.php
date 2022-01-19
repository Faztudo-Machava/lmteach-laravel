<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('site/font-awesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('site/bootstrap-icons/bootstrap-icons.css') }}">
    <title>Formulario de contacto</title>
</head>

<body>

    {{-- <p>Nome : {{ $detalhes['nome'] }}</p>
    <p>Email : {{ $detalhes['email'] }}</p>
    <p>Mensagem : {{ $detalhes['mensagem'] }}</p> --}}

    {{-- <div class="bg-white row">
        <div class="text-center bg-principle py-4 text-center h3 text-white">
           LMTeacher 
        </div>
        <div class="p-5">
            <h1>Mensagem de contacto</h1>
            <div class="row">
                <div class="py-2 col-6">
                    <h5>Nome</h5>
                    <p>{{ $detalhes['nome'] }}</p>
                </div>
                <div class="py-2 col-6">
                    <h5>Email</h5>
                    <p>{{ $detalhes['email'] }}</p>
                </div>
            </div>
            <div class="py-2">
                <h5>Mensagem</h5>
                <p>{{ $detalhes['mensagem'] }}</p>
            </div>
            <div class="row flex-column mt-5">
                <div class="row">
                    <p class=""> <i class="bi bi-geo-alt text-principle"></i> Maputo, av.24 de julho, 232</p>
                </div>
                <div class="">
                    <ul class="navbar-nav flex-row">
                        <li class="nav-item"><a href="https://m.facebook.com/lmteach.studentshelper.7?ref=bookmarks" target="blank" class="nav-link text-principle"><i class="bi bi-facebook fs-3 me-3"></i></a></li>
                        <li class="nav-item"><a href="https://chat.whatsapp.com/FjPNNWGVuJOBGnJ9A78U6u" target="blank" class="nav-link text-principle"><i class="bi bi-whatsapp fs-3 me-3"></i></a></li>
                        <li class="nav-item"><a href="https://www.instagram.com/lmteach.inc/" target="blank" class="nav-link text-principle"><i class="bi bi-instagram fs-3"></i></a></li>
                    </ul>
                </div>
            </div> 
        </div>
    </div> --}}
    <div style="background-color: white; display: flex; flex-direction: column">
        <div style="text-align: center; background-color: #1EB2A6; padding-top: 1.5rem; padding-bottom: 1.5rem; color: white">
           <h3>LMTeacher</h3> 
        </div>
        <div style="padding: 3rem; justify-content: center; align-items: center; display: flex; flex-direction: column">
            <h2>Mensagem de contacto</h2>
            <div style="display: flex; flex-direction: row;">
                <div style="padding: 0.5rem 0; display: flex; flex-direction: column; margin-right: 3rem;">
                    <h5>Nome</h5>
                    <p>Faztudo Machava</p>
                </div>
                <div style="padding: 0.5rem 0; display: flex; flex-direction: column;">
                    <h5>Email</h5>
                    <p>fasthymachava12@gmail.com</p>
                </div>
            </div>
            <div class="py-2" style="padding: 0.5rem 0;">
                <h5>Mensagem</h5>
                <p>Testando as mensagens de contacto</p>
            </div>
            <div class="row flex-column mt-5">
                <div class="row">
                    <p class=""> <i class="bi bi-geo-alt text-principle"></i> Maputo, av.24 de julho, 232</p>
                </div>
                <div class="">
                    <ul class="navbar-nav flex-row">
                        <li class="nav-item"><a href="https://m.facebook.com/lmteach.studentshelper.7?ref=bookmarks" target="blank" class="nav-link text-principle"><i class="bi bi-facebook fs-3 me-3"></i></a></li>
                        <li class="nav-item"><a href="https://chat.whatsapp.com/FjPNNWGVuJOBGnJ9A78U6u" target="blank" class="nav-link text-principle"><i class="bi bi-whatsapp fs-3 me-3"></i></a></li>
                        <li class="nav-item"><a href="https://www.instagram.com/lmteach.inc/" target="blank" class="nav-link text-principle"><i class="bi bi-instagram fs-3"></i></a></li>
                    </ul>
                </div>
            </div> 
        </div>
    </div>
</body>

</html>

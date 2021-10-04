<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <p>Oi {{$detalhes['nome']}}</p>
        <br><br>
        <p>Essa é uma mensagem de redefinição de password da sua conta na plataforma Lmteacher. Caso não seja da sua autoria apenas ignore.</p>
        <p>Caso seja da sua autoria <a href="{{route('home')}}/resetPasswordPage?code={{$detalhes['verification_code']}}">clique aqui</a></p>
    </div>
</body>
</html>
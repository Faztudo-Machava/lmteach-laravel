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
        <p>Seja bem vindo ao lmteacher, uma plataforma com o objectivo de auxiliar aos estudantes na sua tarefa, porfavor confirme o seu email para prosseguir na plataforma.</p>
        <a href="{{route('home')}}/verificar?code={{$detalhes['verification_code']}}">Link de confirmação do email</a>
    </div>
</body>
</html>
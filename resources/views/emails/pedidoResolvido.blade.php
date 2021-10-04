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
        <p>O seu {{$detalhes['tipo_pedido']}} de {{$detalhes['assunto_pedido']}} de codigo {{$detalhes['pedido']}} já foi resolvido.</p>
        <p>Encontre a resolução do seu pedido na plaforma <a href="{{route('home')}}">LMTEACHER</a>.</p>
    </div>
</body>
</html>
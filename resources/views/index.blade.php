<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{asset('site/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('site/font-awesome/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/index.css')}}">
    <link rel="stylesheet" href="{{asset('site/font-awesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('site/bootstrap-icons/bootstrap-icons.css')}}">
    @yield('css')
</head>
<body class="bg-primary">
    @include('header/header')
    @yield('conteudo')
    @include('footer/footer')
<script src="{{asset('site/jquery.js')}}"></script>
<script src="{{asset('site/bootstrap.js')}}"></script>
</body>
</html>

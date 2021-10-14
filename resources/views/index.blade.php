<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LMTEACHER</title>
    <link rel="shortcut icon" href="{{asset('img/logo.jpeg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('site/index.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/catto.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('site/font-awesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('site/bootstrap-icons/bootstrap-icons.css') }}">
    @yield('css')
</head>

<body class="">
    @yield('header')
    @yield('conteudo')
    @yield('footer')
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
    <script src="{{ asset('site/js/pedido.js') }}"></script>
    <script src="{{ asset('site/js/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>

    @yield('js')
</body>

</html>

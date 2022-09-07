<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid px-0">
        <nav class="navbar nav-bar-custom">
            <a class="navbar-brand text-center" href="{{ route('dashboard') }}" style="width: 80px">
                <img src="/images/logo.png" width="30" height="30" alt="">
            </a>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="btn" type="submit" style="color: #fff;">Salir</button>
            </form>
        </nav>
        @yield('content')
    </div>
</body>

</html>

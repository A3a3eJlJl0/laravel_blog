<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@section('title')@show</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    @section('menu')
        <!-- Grey with black text -->
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}">Домашняя страница</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('news.categories') }}">Сплетни и слухи</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('news.add') }}">Добавить новость</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('auth.form') }}">Авторизация</a>
                </li>
            </ul>
        </nav>
    @show

    <h1 class="page-title">@yield('header')</h1>

    @yield('content')

</body>
</html>

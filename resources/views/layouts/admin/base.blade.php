<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') </title>
    <link rel="stylesheet" href="/styles/bootstrap-4.4.1-dist/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/styles/main.css">
    <script src="/js/jquery.js"></script>
    <script src="/styles/bootstrap-4.4.1-dist/dist/js/bootstrap.js"></script>
    <script src="/styles/bootstrap-4.4.1-dist/dist/js/bootstrap.esm.js"></script>
    <script src="/styles/bootstrap-4.4.1-dist/dist/js/bootstrap.bundle.js"></script>
    @yield('styles')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Администрирование</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.index') }}">Ученики</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.topics') }}">Темы</a></li>
                </ul>
                @auth
                    <form action="{{ route('logout') }}" method="POST" class="d-flex">
                        @csrf
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item navbar-brand"> {{ \Illuminate\Support\Facades\Auth::user()->name }}</li>
                        </ul>
                        <input type="submit" class="btn btn-danger" value="Выход">
                    </form>
                @endauth
            </div>
        </div>
    </nav>
    <?php
    $crumbs = \App\Http\Middleware\BreadCrumbs::run();
    ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light">
            @foreach($crumbs as $crumb)
                    <li class="breadcrumb-item"><a href="{{ $crumb['url'] }}">{{ $crumb['name'] }}</a></li>
            @endforeach
        </ol>
    </nav>
    @yield('main')
</body>
</html>

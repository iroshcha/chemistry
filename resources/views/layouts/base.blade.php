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
    @yield('main')
</body>
</html>

<!doctype html>
<html lang="sv-SE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Lara from Scratch')</title>
</head>
<body>
<ul>
    <li><a href="/">home</a></li>
    <li><a href="/contact">contact</a></li>
    <li><a href="/about">about</a></li>
</ul>
@yield('content')
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trello Clone</title>
    <link href="https://unpkg.com/nes.css@0.0.2/css/nes.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div class="container">
    <h1>My Trello Clone</h1>

    @yield('content')

    <footer>copyright Radius College &copy; </footer>
</div>
</body>
</html>
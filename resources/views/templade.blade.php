<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto Web</title>
</head>
<body>
    <p>
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('blog')}}">Blog</a>
    </p>

    <hr>

    <!-- Plantilla cuerpo del proyecto -->
    @yield('content')

</body>
</html>
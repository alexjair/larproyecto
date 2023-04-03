<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listado</h1>

    @foreach ($posts as $post)
    <p>
        <strong>{{ $post['id']}}</strong>
        <a href="">
            {{$post['title']}}
        </a>
    </p>
    @endforeach
</body>
</html>
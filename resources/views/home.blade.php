<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>N + 1</title>
</head>
    <body>
        <h1>Libros</h1>
        @foreach($books as $book)
            <li>
                <strong>{{ $book->title }}</strong>
                <em>{{ $book->category->name }}</em> Autor ({{ $book->user->name }})
            </li>
        @endforeach
    </body>
</html>
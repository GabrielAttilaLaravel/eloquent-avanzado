<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Many to Many</title>
</head>
<body>
    <h1>Muchos a Muchos "Many to Many"</h1>

    <ul>
        @foreach($users as $user)
            <li><strong>Autor</strong>: {{ $user->name }}
                <a href="{{ route('getEdit', $user->id) }}">Editar</a>
                <ul>
                    @foreach($user->manyBooks as $book)
                        <li>{{ $book->title }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>

</body>
</html>

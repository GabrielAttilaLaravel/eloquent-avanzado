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
        <h1>Relación</h1>
        {!! Form::model($user, ['route' => ['putEdit', $user->id], 'method' => 'PUT']) !!}
            <div>
                <p>
                    <strong>Usuario (Autor)</strong>
                    {{ $user->name }}
                </p>
            </div>
            <div>
                {!! Form::label('books', 'Libros') !!}<br>
                {!! Form::select('books[]', $books, null, ['multiple']) !!}
            </div>
            {!! Form::submit('Actualizar') !!}
        {!! Form::close() !!}
    </body>
</html>

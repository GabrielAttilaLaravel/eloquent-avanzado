<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eloquent</title>
</head>
<body>
<p>
    {{ count($books) }} Registros.
</p>
    <form action="{{ url('destroy') }}" method="post">
        {!! csrf_field() !!}
        {!! method_field('delete') !!}

        @foreach($books as $book)
            <input type="checkbox" name="ids[]" value="{{ $book->id }}"> {{ $book->title }}<br>
        @endforeach
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

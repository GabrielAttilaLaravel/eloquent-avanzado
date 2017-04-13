<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relaciones</title>
</head>
<body>
    @foreach($categories as $category)
        @if(count($category->books)>0)
            <p>
                {{ $category->name }} ({{ count($category->books) }})
            </p>
            <ul>
                @foreach($category->books as $book)
                    <li>
                        <strong>{{ $book->title }}:</strong>
                        {{ $book->description }}
                    </li>
                @endforeach
            </ul>
        @endif
    @endforeach
</body>
</html>

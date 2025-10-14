<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang</title>
</head>

<body>
    <h1>Ini tampilan dari view Books</h1>

    @foreach ($books as $book)
        <ul>
            <li>{{$book['title']}}</li>
            <li>{{$book['description']}}</li>
            <li>{{$book['price']}}</li>
            <li>{{$book['stock']}}</li>
        </ul>
    @endforeach
</body>

</html>

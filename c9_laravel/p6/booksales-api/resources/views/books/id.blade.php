<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang</title>
</head>

<body>
    @if (isset($book))
        <h1>Ini tampilan dari view Books dengan id {{ $id }} </h1>
        
        <ul>
            <li>ID: {{$book->id}}</li>
            <li>Title: {{$book->title}}</li>
            <li>Description: {{$book->description}}</li>
            <li>Genre: {{$book->genre->name}}</li>
            <li>Author: {{$book->author->name}}</li>
            <li>Price: {{$book->price}}</li>
            <li>Stock: {{$book->stock}}</li>
        </ul>
    @else
        <h1>Books dengan id {{ $id }} tidak ditemukan </h1>
    @endif
</body>

</html>

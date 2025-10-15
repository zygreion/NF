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
            <li>ID: {{$book->id}}</li>
            <li>Title: {{$book->title}}</li>
            <li>Description: {{$book->description}}</li>
            <li>Genre: {{$book->genre->name}}</li>
            <li>Author: {{$book->author->name}}</li>
            <li>Price: {{$book->price}}</li>
            <li>Stock: {{$book->stock}}</li>
        </ul>
    @endforeach
</body>

</html>

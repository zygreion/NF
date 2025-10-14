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
            <li>{{$book['title']}}</li>
            <li>{{$book['description']}}</li>
            <li>{{$book['price']}}</li>
            <li>{{$book['stock']}}</li>
        </ul>
    @else
        <h1>Books dengan id {{ $id }} tidak ditemukan </h1>
    @endif
</body>

</html>

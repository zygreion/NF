<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang</title>
</head>

<body>
    <h1>Ini tampilan dari view Genres</h1>

    @foreach ($genres as $genre)
        <ul>
            <li>ID: {{$genre['id']}}</li>
            <li>Name: {{$genre['name']}}</li>
            <li>Description: {{$genre['description']}}</li>
        </ul>
    @endforeach
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang</title>
</head>

<body>
    <h1>Ini tampilan dari view Authors</h1>

    @foreach ($authors as $author)
        <ul>
            <li>ID: {{$author['id']}}</li>
            <li>Name:  {{$author['name']}}</li>
            <li>Nationality: {{$author['nationality']}}</li>
            <li>Birthdate: {{$author['birthdate']}}</li>
        </ul>
    @endforeach
</body>

</html>

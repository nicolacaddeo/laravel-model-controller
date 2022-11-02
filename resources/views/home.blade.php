<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel | Movie</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div id="app">
        <div class="container">
            @foreach ($movies as $movie)
                <div class="movie-card">
                    <p><strong>Titolo:</strong> {{ $movie->title }}</p>
                    <p><strong>Titolo Originale:</strong> {{ $movie->original_title }}</p>
                    <p><strong>Nazionalita:</strong> {{ $movie->nationality }}</p>
                    <p><strong>Data di uscita:</strong> {{ $movie->date }}</p>
                    <p><strong>Voto:</strong> {{ $movie->vote }}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>

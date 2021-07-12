<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Movies DB</title>
</head>
<body>
    <main>
    <div class="container">
        <div class="cards">
            @foreach ($movies as $movie)
                <div class="card">
                    <h2>{{$movie->title}}</h2>
                    <h3>Original title: {{$movie->original_title}}</h3>
                    <h3>Nationality: {{$movie->nationality}}</h3>
                    <span>{{$movie->date}}</span>
                    <h3>AVG Vote: {{$movie->vote}}</h3>
                </div>
            @endforeach
        </div>
    </div>
    </main>
</body>
</html>
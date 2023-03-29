<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movie-list</title>


</head>

<body>
    <h1>Movie-List</h1>
    <div class="container">
        <div class="row">
            @foreach($movies as $movie)

            <div class="col-3">
                <h2>{{$movie['title']}}</h2>
                <p>{{$movie['original_title']}}</p>
                <p>{{$movie['nationality']}}</p>
                <p>{{$movie['date']}}</p>
                <p>{{$movie['vote']}}</p>

            </div>
            @endforeach
        </div>
    </div>




</body>

</html>
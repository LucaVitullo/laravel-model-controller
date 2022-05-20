<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Movies</title>
</head>

<body>

    <div class="container">
        <div class="cards">
            @foreach ($movie as $item)
                <div class="card">{{ $item['title'] }}-{{ $item['original_title'] }} </div>
            @endforeach
        </div>
    </div>
</body>

</html>

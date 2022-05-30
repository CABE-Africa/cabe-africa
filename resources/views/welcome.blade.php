<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config("app.name", "Center of African Bio-Entrepreneurship") }}</title>

    <link rel="stylesheet" href="{{ mix("css/app.css") }}">
</head>

<body class="antialiased text-center">
    <h1 class="text-primary">{{ config("app.name") }}</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex omnis voluptatibus iste, deserunt laboriosam sed
        doloribus placeat laudantium nesciunt asperiores vel deleniti adipisci aut perferendis inventore ea repudiandae
        recusandae unde, doloremque nihil! Dolores deleniti quos nemo et, natus rem laboriosam molestias saepe similique
        earum! Maxime iste nisi doloremque aperiam voluptatum cupiditate laudantium eius explicabo et aliquam ducimus
        adipisci repudiandae, esse hic optio harum quas!</p>
        
    <script src="{{ mix("js/app.js") }}"></script>
</body>

</html>
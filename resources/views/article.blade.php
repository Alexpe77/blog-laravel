<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article {{ $articleId->id }}</title>
</head>
<!----------------- TODO: ADD THE RIGHT THING TO DISPLAY ----------->
<body>
    <article>
        <h2>{{ $article->title }}</h2>
        <p>{{ $article->author }}</p>
        <div>{{ $article->content }}</div>
        <p>{{ $article->publish_date }}</p>
    </article>
</body>

</html>
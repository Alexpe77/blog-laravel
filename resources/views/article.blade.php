<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Article {{ $article->id }}</title>
</head>

<body>
    <article>
        <h2>{{ $article->title }}</h2>
        <p>Written by {{ $article->author }}</p>
        <div>{{ $article->content }}</div>
        <p>Publish date {{ $article->publish_date }}</p>
    </article>
    <a href="/Blog-Laravel/public/articles">< Go back</a>

</body>

</html>
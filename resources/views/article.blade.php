<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article {{ $article->id }}</title>
</head>

<body>
    <article>
        <h2>Written by {{ $article->title }}</h2>
        <p>{{ $article->author }}</p>
        <div>{{ $article->content }}</div>
        <p>Publish date {{ $article->publish_date }}</p>
    </article>
    <a href="/Blog-Laravel/public/articles">< Go back</a>

</body>

</html>
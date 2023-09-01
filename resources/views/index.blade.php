<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>
<body>
    @foreach ($articles as $article)
        <article>
            <h2>{{ $article->title }}</h2>
            <p>{{ $article->author }}</p>
            <div>{{ $article->content }}</div>
            <p>{{ $article->publish_date }}</p>
        </article>
    @endforeach
</body>
</html>
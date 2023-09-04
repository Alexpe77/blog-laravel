<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
    <title>All Articles</title>
</head>
<body>
    @foreach ($articles as $article)
        <article>
            <h2><a href="{{ url('/article', ['id' => $article->id]) }}">{{ $article->title }}</a></h2>
            <p>{{ $article->author }}</p>
            <div>{{ $article->content }}</div>
            <p>{{ $article->publish_date }}</p>
        </article>
    @endforeach
</body>
</html>
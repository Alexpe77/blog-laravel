<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
    <title>My Blog</title>
</head>
<body>

<h1>Welcome to my blog!</h1>

    @foreach ($articles as $article)
        <article>
            <h2><a href="{{ url('/article', ['id' => $article->id]) }}">{{ $article->title }}</a></h2>
            <p>Written by {{ $article->author }}</p>
            <div>{{ $article->content }}</div>
            <p>Publish date {{ $article->publish_date }}</p>
        </article>
    @endforeach

    <div class="create">
        <p>Click <a href="/Blog-Laravel/public/create">here</a> to create a new article</p>
    </div>
</body>
</html>
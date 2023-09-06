<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>My Blog</title>
</head>

<body>
    <div class="top_block">
        <h1>Welcome to my blog!</h1>
        <nav><a href="/Blog-Laravel/public/signup">Sign Up</a>
            <a href="/Blog-Laravel/public/login">Login</a>
        </nav>
    </div>
    @if (session()->has('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="fixed btn btn-primary">
        <p>{{ session('success') }}</p>
    </div>
    @endif

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
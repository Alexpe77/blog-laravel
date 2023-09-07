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
        <nav>
            <a href="/Blog-Laravel/public/signup" class="btn btn-primary">Sign Up</a>
            <a href="/Blog-Laravel/public/login" class="btn btn-primary">Login</a>
        </nav>
    </div>
    @if (session()->has('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="fixed btn btn-primary">
        <p>{{ session('success') }}</p>
    </div>
    @endif

    <div class="container">
    <div class="row">
        @foreach ($articles as $article)
        <div class="col-md-4 g-2">
            <div class="card h-100 l-80" style="width: 19rem;">
                <img src="{{ asset('img/' . $article->picture) }}" class="card-img-top img-fluid" alt="Picture of an open book">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-text">by {{ $article->author }}</p>
                    <p class="card-text">Publish date {{ $article->publish_date }}</p>
                    <a href="{{ url('/article', ['id' => $article->id]) }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
    <div class="create">
        <p>Click <a href="/Blog-Laravel/public/create">here</a> to create a new article</p>
    </div>
</body>

</html>
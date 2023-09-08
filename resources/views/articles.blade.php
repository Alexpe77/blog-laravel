<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title>Blog</title>
</head>

<body class="">
    <div class="top_block d-flex justify-content-between align-items-center bg-light custom-bg shadow-sm">
        <h1 class="mx-auto mt-3 fw-bold" style="font-family: 'Lato', sans-serif;font-size: 36px;">What do you want to read today ?</h1>
        <div class="right-section mt-3">
            <a href="/Blog-Laravel/public/signup" class="btn btn-outline-primary mx-1 mb-2 d-block">Sign Up</a>
            <a href="/Blog-Laravel/public/login" class="btn btn-outline-primary mx-1 mb-2 d-block">Login</a>
        </div>
    </div>
    @if (session()->has('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="fixed btn btn-primary">
        <p>{{ session('success') }}</p>
    </div>
    @endif

    <div class="container mt-4">
    <div class="row">
        @foreach ($articles as $article)
        <div class="col-md-12 mb-3">
            <div class="card l-100" style="width: 80%;">
                <img src="{{ asset('img/' . $article->picture) }}" class="card-img-top img-fluid" alt="Picture of an open book">
                <div class="card-body text-center shadow">
                    <h5 class="card-title" style="font-size: 22px;">"{{ $article->title }}"</h5>
                    <p class="card-text">by {{ $article->author }}</p>
                    <p class="card-text">Publish date {{ date('d-m-Y', strtotime($article->publish_date)) }}</p>
                    <a href="{{ url('/article', ['id' => $article->id]) }}" class="btn btn-primary mx-auto shadow-sm">Read More</a>
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
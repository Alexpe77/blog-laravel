<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="/Blog-Laravel/resources/js/flash.js"></script>
    <style> 
    .btn, .card-title {
        background-color: black;
        color: lightgreen;
    }
    
    .btn:hover {
        background-color: lightgreen;
        color: black;
    }
    </style>
    <title>Blog</title>
</head>

<body style="background-color: black; position: relative;">
    <div class="top_block d-flex justify-content-between align-items-center" style="background-color: black; color: whitesmoke; box-shadow: -2px 5px 6px rgba(200, 200, 200, 0.5); height: 100px;">
        <h1 class="mx-auto mt-3 fw-bold" style="font-family: 'Lato', sans-serif; font-size: 36px; position: absolute; left: 50%; transform: translateX(-50%);">What do you want to read today ?</h1>
        <div class="right-section mt-3" style="position: absolute; right: 0; top: 0;">
            <a href="/Blog-Laravel/public/signup" class="btn btn-outline-info mx-1 mb-2" style="border: 2px solid green;">Sign Up</a>
            <a href="/Blog-Laravel/public/login" class="btn btn-outline-info mx-1 mb-2" style="border: 2px solid green;">Login</a>
        </div>
    </div>
    @if (session()->has('success'))
    <div id="flash-msg" class="alert alert-success" style="display: none;">
        <p>{{ session('success') }}</p>
    </div>
    @endif

    <div class="container mt-4">
    <div class="row">
        @foreach ($articles as $article)
        <div class="col-md-12 mb-3">
            <article class="card l-100 mx-auto" style="width: 70%; border: 1px solid black; border-radius: 10px; box-shadow: -3px 5px 6px rgba(173, 216, 230, 0.7);">
                <!-- <img src="{{ asset('img/' . $article->picture) }}" class="card-img-top img-fluid" alt="Picture of an open book" style="border-radius: 10px 10px 0 0;"> -->
                <div class="card-body text-center" style="background-color: black; color: whitesmoke; border-radius: 0 0 10px 10px; box-shadow: -2px 5px 6px rgba(173, 216, 230, 0.7);">
                    <h5 class="card-title" style="font-size: 22px;">"{{ $article->title }}"</h5>
                    <p class="card-text">by {{ $article->author }}</p>
                    <p class="card-text">{{ Str::words($article->content, 19) }}</p>
                    <p class="card-text">Publish date {{ date('d-m-Y', strtotime($article->publish_date)) }}</p>
                    <a href="{{ url('/article', ['id' => $article->id]) }}" class="btn btn-outline-info mx-auto" style="border: 2px solid green;">Read More</a>
                </div>
            </article>
        </div>
        @endforeach
    </div>
</div>
    <div class="create text-light text-center">
        <p>Click <a href="/Blog-Laravel/public/create">here</a> to create a new article</p>
    </div>
</body>

</html>
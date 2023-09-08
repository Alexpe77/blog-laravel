<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Book {{ $article->id }}</title>
</head>

<body class="bg-black">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-4">
                <div class="p-4" style="background-color: black; color: whitesmoke; border-radius: 10px; box-shadow: 1px 1px 15px 8px rgba(255,255,255,0.71);">
                    <h2 style="color: lightgreen; font-size: 30px;">{{ $article->title }}</h2>
                    @if (!empty($article->picture))
                    <img src="{{ asset('img/' . $article->picture) }}" alt="Picture of a book" class="card-img-right img-fluid rounded mt-3">
                    @endif
                    <p class="mt-4">Written by {{ $article->author }}</p>
                    <p class="mt-4">{{ $article->content }}</p>
                    <p style="border-top: 1px solid lightgreen;">Publish date {{ date('d-m-Y', strtotime($article->publish_date)) }}</p>
                    <a href="/Blog-Laravel/public/articles">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="lightgreen" class="bi bi-house" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
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
                <div class="p-4" style="background-color: black; color: whitesmoke; border-radius: 10px; box-shadow: 1px 1px 15px 8px rgba(173, 216, 230, 0.7);">
                    <h2 style="color: lightgreen; font-size: 30px;">{{ $article->title }}</h2>
                    <p class="mt-2">By {{ $article->author }}</p>
                    @if (!empty($article->picture))
                    <img src="{{ asset('img/' . $article->picture) }}" alt="Picture of a book" class="img-fluid rounded mt-2">
                    @endif
                    <p class="mt-3">{{ $article->content }}</p>
                    <p style="border-top: 1px solid lightgreen;">Publish date {{ date('d-m-Y', strtotime($article->publish_date)) }}</p>
                    <x-home-icon/>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
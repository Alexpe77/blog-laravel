<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>New article</title>
    <x-head.tinymce-config />
    <style>
        h2 {
            text-shadow: 2px 2px 4px rgba(173, 216, 230, 0.7);
        }
    </style>
</head>

<body class="bg-black">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center p-4">
                    <h2 class="text-light fs-1">Create a new article</h2>
                </div>
                <form method="POST" action="{{ route('article.create') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label text-light">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label text-light">Author</label>
                        <input type="text" class="form-control" id="author" name="author" required>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label text-light">Content</label>
                        <textarea id="editor" name="content" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <x-home-icon />
            </div>
        </div>
    </div>
</body>


</html>
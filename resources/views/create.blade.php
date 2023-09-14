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

        .form-label {
            color: lightgreen;
        }

        .custom-shadow {
            box-shadow: 1px 1px 15px 8px rgba(173, 216, 230, 0.7);
            border-radius: 10px;
        }

        .btn {
            background-color: lightgreen;
            border: 1px solid green;
            font-weight: 900;
            box-shadow: 3px 3px 15px 1px rgba(173, 216, 230, 0.7);
        }
    </style>
</head>

<body class="bg-black">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center p-4">
                    <h2 class="fs-1 text-light">Create a new article</h2>
                </div>
                <div class="custom-shadow p-4">
                    <form method="POST" action="{{ route('article.create') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label fs-5">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label fs-5">Author</label>
                            <input type="text" class="form-control" id="author" name="author" required>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label fs-5">Content</label>
                            <textarea id="editor" name="content" class="form-control" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="form-control btn btn-light fs-6 mt-2">Submit</button>
                        </div>
                        <div class="mt-3">
                <x-home-icon />
                </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</body>

</html>
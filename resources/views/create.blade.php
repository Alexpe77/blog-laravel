<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>New article</title>
    <x-head.tinymce-config/>
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
                <x-forms.tinymce-editor/>
                <x-home-icon/>
            </div>
        </div>
    </div>
</body>


</html>
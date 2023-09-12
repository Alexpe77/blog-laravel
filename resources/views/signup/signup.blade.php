<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .custom-rounded {
            border-radius: 10px;
        }

        body, .custom-bg {
            background-color: black;
            color: whitesmoke;
        }

        .btn {
            background-color: lightgreen;
            border-style: none;
        }

        h2, h4, a {
            color: lightgreen;
        }
    </style>
    <title>Sign Up</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-4 custom-rounded" style="box-shadow: 1px 1px 15px 8px rgba(173, 216, 230, 0.7);">
                <div class="p-4 shadow custom-bg">
                    <h2 class="text-center"><b>Welcome !</b></h2>
                    <h4 class="text-center">Let's sign you up quickly</h4>
                    <hr>
                    <form method="POST" class="mt-4" action="{{ url('/signup') }}">
                        @csrf
                        <div class="form-group mb-1">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ old('name') }}" required>
                            @error('name')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-1">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="{{ old('username') }}" required>
                            @error('username')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-1">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required>
                            @error('email')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-1">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                            @error('password')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" class="form-control btn btn-light shadow-sm"><b>SUBMIT</b></button>
                        </div>
                    </form>
                    <div class="d-flex justify-content-between mt-4">
                        <a href="/Blog-Laravel/public/articles">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="lightgreen" class="bi bi-house text-black" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                            </svg>
                        </a>
                        <p>Already have an account ? <a href="{{ route('login') }}">Log in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
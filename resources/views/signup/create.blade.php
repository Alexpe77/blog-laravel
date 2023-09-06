<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Sign Up</title>
</head>

<body>
    <h2>Welcome</h2>
    <h3>Let's sign up quickly</h3>

    <form method="POST" action="{{ url('/signup') }}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        @error('name')
        <p>{{ $message }}</p>
        @enderror
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="{{ old('username') }}" required>
        @error('username')
        <p>{{ $message }}</p>
        @enderror
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        @error('email')
        <p>{{ $message }}</p>
        @enderror
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        @error('password')
        <p>{{ $message }}</p>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="/Blog-Laravel/public/articles">< Go back</a>
</body>

</html>
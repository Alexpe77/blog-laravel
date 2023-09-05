<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h2>Welcome</h2>
    <h3>Let's sign up quickly</h3>

    <form method="POST" action="/signup">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
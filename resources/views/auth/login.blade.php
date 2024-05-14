<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    {{-- style --}}
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>

<body>
    <form class="login" action="/login" method="POST">
        @csrf
        <input type="email" name="email">
        <input type="password" name="password">
        <button type="submit">Login</button>
    </form>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/mytfficon.png') }}">
    <style>
        body {
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            width: 450px;
            padding: 20px;
            background-color: #4e73df;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="login-container">
<img src="{{ asset('img/mytuffkotak.png') }}" style="height: 160px;" alt="mapala" class="mx-auto d-block">
    <h2 class="text-center text-light">LOGIN</h2>
    @if (session('error'))
        <div>{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group text-light">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
        </div>
        <div class="form-group text-light">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
        </div>
        <button type="submit" class="text-center text-primary btn btn-light" style="justify-content: center; align-items:center">Login</button>
        <p style="margin-top: 8px" class="text-light">Belum Punya Akun? <a href="{{ route('register') }}" class="text-light"><b>Register</b></a></p>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
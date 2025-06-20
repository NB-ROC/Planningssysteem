<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - ROC Nijmegen</title>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <div>
            <strong style="font-size: 1.2rem;">ROC</strong> Nijmegen
        </div>
        <nav>
            <a href="#">Menu</a>
            <a href="#">Rooster</a>
            <a href="#">Planning</a>
            <a href="#">Salaris</a>
        </nav>
        <div>
            <span>⚙️ 👤</span>
        </div>
    </header>

    <div class="login-container">
        <form method="POST" action="{{ route('login') }}" class="login-box">
            @csrf
            <label for="email">Username</label>
            <input id="email" type="text" name="email" placeholder="Username..." required autofocus>

            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>

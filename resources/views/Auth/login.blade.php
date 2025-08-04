<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    @vite('resources/css/login.css')
    @vite('resources/js/login.js')
    <style> body{background: url("{{ asset('images/login_bg.png') }}") no-repeat center center fixed;}</style>
</head>
<body>
    <div class="login-container">
        <h1>VIGOUR SEEDS | Log In</h1>

        @if(session('error'))
            <p class="error">{{ session('error') }}</p>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form>

        <p class="register-text">Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
    </div>
</body>
</html>

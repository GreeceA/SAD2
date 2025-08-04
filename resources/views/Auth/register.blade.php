<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    @vite('resources/css/register.css')
    @vite('resources/js/register.js')
    <style> body{background: url("{{ asset('images/login_bg.png') }}") no-repeat center center fixed;}</style>
</head>
<body>
    <form method="POST" action="{{ route('register') }}">
        <h1>Register</h1>
        @csrf

        @if($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div>
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
        </div>

        <div>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>

        <div>
            <button type="submit">Register</button>
        </div>

        <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
    </form>
</body>
</html>

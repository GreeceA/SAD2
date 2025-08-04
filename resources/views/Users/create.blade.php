<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>
    <h2>Create New User</h2>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div>
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" required>
        </div>

        <div>
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>

        <button type="submit">Create</button>
    </form>

    <br>
    <a href="{{ route('users.index') }}">← Back to list</a>
</body>
</html>

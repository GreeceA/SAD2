<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name" value="{{ old('first_name', $user->first_name) }}" required>
        </div>

        <div>
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $user->last_name) }}" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required>
        </div>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('users.index') }}">← Back to list</a>
</body>
</html>

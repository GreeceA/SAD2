<!DOCTYPE html>
<html>
<head>
    <title>View User</title>
</head>
<body>
    <h1>User Profile</h1>

    <ul>
        <li><strong>First Name:</strong> {{ $user->first_name }}</li>
        <li><strong>Last Name:</strong> {{ $user->last_name }}</li>
        <li><strong>Email:</strong> {{ $user->email }}</li>
        <li><strong>Created At:</strong> {{ $user->created_at }}</li>
        <li><strong>Updated At:</strong> {{ $user->updated_at }}</li>
    </ul>

    <p>
        <a href="{{ route('users.edit', $user->id) }}">Edit</a> |
        <a href="{{ route('users.index') }}">Back to List</a>
    </p>

    <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</body>
</html>

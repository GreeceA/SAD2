@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>

    <p>Welcome, {{ auth()->user()->first_name }}!</p>

    <ul>
        <li><a href="{{ route('users.index') }}">View Users</a></li>
        <li>
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit">
                    Logout
                </button>
            </form>
        </li>
    </ul>
@endsection

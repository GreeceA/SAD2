<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Laravel App</title>
</head>
<body>

    <header>
        <h2>MyApp Header</h2>
        <!-- Add nav here if needed -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <small>&copy; 2025 My Laravel App</small>
    </footer>

</body>
</html>

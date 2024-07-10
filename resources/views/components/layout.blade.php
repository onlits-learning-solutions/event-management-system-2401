<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} - {{ $title }}</title>
</head>
<body>
    <header>
        <h1>{{ env('APP_NAME') }}</h1>
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer>
        <p>&copy2024, Onlits Learning Solutions</p>
    </footer>
</body>
</html>
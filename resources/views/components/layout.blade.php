<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>{{ env('APP_NAME') }} - {{ $title }}</title>
</head>
<body class="container mt-3">
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
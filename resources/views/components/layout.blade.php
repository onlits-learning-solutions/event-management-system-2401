<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
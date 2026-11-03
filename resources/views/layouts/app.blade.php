<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Laravel - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/mahasiswa.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 1em;
            text-align: center;
        }
        main {
            padding: 2em;
            padding-bottom: 6em;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Header Aplikasi</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 Aplikasi Laravel.</p>
    </footer>
</body>
</html>

</html>
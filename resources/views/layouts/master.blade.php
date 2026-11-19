<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- vite assets --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>Movies</title>
</head>
<body>
    
    <header class="bg-primary p-2">
        <div class="container">
            <h1>List of movies</h1>
        </div>
    </header>

    <main class="container mt-4">
        @yield('content')
    </main>

</body>
</html>
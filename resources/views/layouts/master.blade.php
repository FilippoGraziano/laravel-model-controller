<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- vite assets --}}
    @vite(['resources/sass/app.css', 'resources/js/app.js'])

    <title>Movies</title>
</head>
<body>
    
    <h1>Hello World!</h1>

    <main>
        @yield('content')
    </main>

</body>
</html>
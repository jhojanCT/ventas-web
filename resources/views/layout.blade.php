<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Ventas')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <div id="app">
        <x-navbar />

        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>

        <x-footer />
    </div>


</body>
</html>

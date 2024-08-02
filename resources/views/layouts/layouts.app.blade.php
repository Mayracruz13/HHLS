{{-- layouts/app.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title> <!-- Aquí se imprime dinámicamente el título -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Otros estilos y scripts -->
</head>
<body>
    @yield('content') <!-- Aquí se incluirá el contenido de la vista específica -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Otros scripts -->
</body>
</html>

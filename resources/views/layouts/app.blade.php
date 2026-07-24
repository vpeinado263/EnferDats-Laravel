<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Enfer-Dats')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('icon.ico') }}">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    @stack('styles') <!-- Para estilos adicionales si los necesitas -->
</head>
<body>

    <!-- =========================ENCABEZADO========================== -->
    <header>
        <!-- Incluimos el navbar parcial -->
        @include('partials.navbar')
    </header>

    <!-- =========================CONTENIDO PRINCIPAL========================== -->
    <main>
        @yield('content')
    </main>

    <!-- =========================PIE DE PÁGINA========================== -->
    @include('partials.footer')

    <!-- Modal (puede ir aquí o en el contenido) -->
    @include('partials.modal')

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
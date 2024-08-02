<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Título por defecto')</title>

    <!-- Enlace al archivo de estilos CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    
    <!-- Enlace a Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .header {
            background-color: #f8f9fa;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .header img {
            max-width: 100%;
            height: auto;
        }

        .navbar-custom {
            background-color: #7ab730; /* Color verde personalizado */
        }

        .btn-nav {
            color: white;
            background-color: #7ab730; /* Color verde oscuro para los botones */
            border: none;
            margin-right: 10px;
            transition: background-color 0.3s;
        }

        .btn-nav:hover {
            background-color: #7ab730; /* Color verde más claro al pasar el cursor */
        }

        .navbar-dark .navbar-nav .nav-link {
            color: white;
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            color: #ddd;
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(255,255,255,.7)' stroke-width='2' d='M4 6h22M4 12h22M4 18h22'/%3E%3C/svg%3E");
        }

        .content {
            padding: 20px;
        }
        @font-face {
  font-family: 'Claphappy';
  src: url('/fonts/Claphappy.ttf') format('truetype');
}

@font-face {
  font-family: 'Bellerose';
  src: url('/fonts/Bellerose.ttf') format('truetype');
}

.titulo {
      color: black;
      font-size: 25px;
      font-family: 'Claphappy', sans-serif;
}

.texto {
  font-family: 'Bellerose', sans-serif;
  font-size: 20px;
}
.seccion2 {
        background-image: url('img/hojitas4.webp');
        
    }
    </style>
</head>

<body>
  
    <div class="seccion2">
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="titulo" class="nav-item">
                        <a  class="nav-link btn-nav" href="/upload">Representante</a>
                    </li>
                    <li class="titulo" class="nav-item">
                        <a class="nav-link btn-nav" href="/unidos">Voluntarios</a>
                    </li>
                    <li class="titulo" class="nav-item">
                        <a class="nav-link btn-nav" href="/pdfs">Informe del Año</a>
                    </li>
                    <li class="titulo" class="nav-item">
                        <a class="nav-link btn-nav" href="/documents">Actividades Activas</a>
                    </li>
                    <li class="titulo" class="nav-item">
                        <a class="nav-link btn-nav" href="/create">Participacion Comunitaria</a>
                    </li>
                    <li class="titulo" class="nav-item">
                        <a class="nav-link btn-nav" href="{{ route('ver.contribuyentes') }}">Ver Contribuyentes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido dinámico -->
    <div class="content">
        @yield('content')
    </div>
</div>
    <!-- Scripts necesarios para el funcionamiento de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

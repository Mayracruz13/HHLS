<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
        padding-top: 56px; /* Espacio para la barra de navegación fija */
    }

    .navbar-brand img {
        height: 40px; /* Ajusta el tamaño del logo */
    }

    @font-face {
      font-family: 'Claphappy';
      src: url('/fonts/Claphappy.ttf') format('truetype');
    }

    @font-face {
      font-family: 'Bellerose';
      src: url('/fonts/Bellerose.ttf') format('truetype');
    }

    .menu5 {
      font-family: 'Claphappy', sans-serif;
    }

    .menu6 {
      font-family: 'Bellerose', sans-serif;
    }

    .navbar-nav .nav-link {
        padding: 5px 15px;
        color: black;
        font-weight: 500;
        font-size: 19px;
        outline: none;
        font-family: 'Claphappy', sans-serif;
        color: black !important; /* Cambia el color de los enlaces a negro */
    }

    .navbar-nav .nav-link:hover {
        color: #333 !important; /* Cambia el color al pasar el cursor, si lo deseas */
    }

    .navbar-brand img {
        height: 45px; /* Ajusta el tamaño del logo a 60px */
    }

    @keyframes falling {
        0% {
            transform: translateY(-100px) rotate(0deg);
            opacity: 1;
        }
        100% {
            transform: translateY(300px) rotate(360deg);
            opacity: 0;
        }
    }

    .confeti-container {
        position: relative;
        overflow: hidden; /* Asegura que las hojas no se salgan del contenedor */
    }

    .leaf {
        width: 50px;
        height: 50px;
        background-size: contain;
        background-repeat: no-repeat;
    }
  </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top confeti-container">
        <a class="navbar-brand" href="#">
            <img src="img/Color.webp" alt="Logo" style="width: 200px; height: auto;">
       
        
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="inicio">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="single">¿Quiénes somos?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="voluntarios">Voluntarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="destinatation">Programas Activos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="participacion">Participación comunitaria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="donar">Donar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Scripts necesarios para el funcionamiento de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const container = document.querySelector(".confeti-container");
            const numLeaves = 70; // Cantidad de hojas

            for (let i = 0; i < numLeaves; i++) {
                const leaf = document.createElement("img");
                leaf.src = "img/hojita.webp"; // Reemplaza esto con la ruta de la imagen de la hoja
                leaf.style.width = "50px";
                leaf.style.position = "absolute";
                leaf.style.top = Math.random() * 100 + "px";
                leaf.style.left = Math.random() * 100 + "%";
                leaf.style.animation = "falling " + (Math.random() * 10 + 2) + "s linear infinite"; // Duración y animación

                container.appendChild(leaf);
            }
        });
    </script>

    @yield('content')
</body>
</html>

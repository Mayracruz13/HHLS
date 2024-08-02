@extends('layouts.app')
@section('content')
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

    <!-- Additional Libraries and Styles -->
    <link href="img/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <style>
        .seccion {
            height: 180vh; /* Opcional: altura de cada sección a pantalla completa */
        }
        .seccion1 {
            background-image: url('img/hojitas4.webp');
        }
        .seccion2 {
            height: 190vh;
            background-image: url(img/hojitas4.webp);
        }
        .seccion5 {
            height: 30vh;
            background-image: url(img/hojitas4.webp);
        }
        .seccion6 {
            height: 10vh;
            background-image: url(img/hojitas4.webp);
        }
        .menu {
            color: black;
      font-size: 25px;
      font-family: 'Claphappy', sans-serif;
        }
        .menu1 {
            font-family: 'Bellerose', sans-serif;
            font-size: 20px;
        }
        .image-container {
            text-align: center;
            padding: 20px;
        }
        .image-container table {
            margin: 0 auto;
        }
        .image-container img {
            width: 400px;
            transition: filter 0.3s ease, transform 0.3s ease;
            position: relative;
        }
        .image-container img::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* dark overlay */
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .image-container img:hover::after {
            opacity: 1;
        }
        .image-container img:hover {
            transform: scale(1.05);
        }
        .contact-container {
            display: flex;
            flex-wrap: wrap;
            width: 100px;
            padding: 60px;
            margin: 20 auto;
            height: auto;
        }
        .contact-info {
            flex: 1;
            text-align: center;
            background: #7ab730;
            padding: 10px;
        }
        .contact-image {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .contact-image img {
            width: 100%;
            max-width: 300px;
            height: auto;
            
        }
        .accordion-item .accordion-header .accordion-button {
            background: #f3f4f0;
            border: none;
            color: #000;
            font-size: 25px;
        }
        .accordion-item .accordion-collapse .accordion-body {
            background: #ffffff;
            color: #000;
            font-size: 20px;
           
        }
        .seccion {
            margin-bottom: 20px;
        }
        .menuu {
            font-family: 'Claphappy';
            color: black;
        }
        .menu11 {
            font-family: 'Bellerose', sans-serif;
            font-size: 20px;
            color: black;
        }
        .social-icons {
            position: fixed;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            z-index: 1000;
            display: flex;
            flex-direction: column;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px 0 0 8px;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: right 0.3s;
        }
        .social-icons a {
            color: #333;
            font-size: 20px;
            margin-bottom: 10px;
            transition: transform 0.3s, color 0.3s;
        }
        .social-icons a:hover {
            transform: translateX(-10px);
            color: #f1f3ef;
        }
        .social-icons .location-icon {
            cursor: pointer;
            font-size: 24px; /* Tamaño del ícono de ubicación */
            color: #333;
        }
        #map {
            height: 400px;
            width: 100%;
            display: none; /* Inicialmente oculto */
        }
        .map-logo {
            cursor: pointer;
            display: block;
            margin: 20px auto;
            text-align: center;
        }
        .map-logo img {
            width: 100px; /* Ajusta el tamaño según sea necesario */
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

        
    </style>

    

    <body>
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/borrar.png" alt="Image">
                    <div class="d-flex flex-column align-items-center justify-content-center">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="seccion seccion2">
        <br><br>
        
        <div>
            <center>
            <h1 class="titulo">Contácto</h1>
            </center>
         
        </div>
      
        
        <div class="contact-container">
            
            <div class="contact-info">
                
                <h3 class="titulo">Visítanos</h3>
                <a class="texto" href="https://goo.gl/maps/9RXNKqZh91ZLQUjb6">Ex hacienda la llave, Col. la llave, Zimapán, Hgo.</a><br><br>
                <h3 class="titulo">Horario</h3>
                <p class="texto">Lunes a Viernes</p>
                <p class="texto">9:00 a.m. a 2:00 p.m.</p><br>
                <h3 class="titulo">Correos</h3>
                <p class="texto">proyectos@transitandohs.com</p>
                <p class="texto">contacto@transitandohs.com</p><br>
                <h3 class="titulo">Teléfono</h3>
                <p class="texto">772-114-7961</p><br>
                
                <div class="social-icons">
                    <a class="menu" href="https://www.facebook.com/transitandohsAC">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="menu" href="https://instagram.com/transitandohs_ac?igshid=MzRlODBiNWFlZA==">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="menu" href="https://www.youtube.com/@transitandohacialasustenta7409/featured">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a class="menu" href="https://wa.me/7721147961">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <!-- Icono de Ubicación -->
                    <a class="location-icon" onclick="toggleMap()">
                        <i class="fas fa-map-marker-alt"></i>
                    </a>
                </div>
            </div>
        </div>
        <style>
            .custom-img {
                max-width: 100px; /* Adjust this value as needed */
                height: auto;     /* Maintains aspect ratio */
            }
        </style>
        
        
        
      
        <div id="map"></div> <!-- Aquí se agregará el mapa -->
        
        <h1 class="titulo">Preguntas frecuentes</h1>
        <div class="accordion" id="accordionExample">
            <br><br>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed titulo" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        ¿Dónde están ubicados?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body menu1">
                        Estamos ubicados en <strong class="menu1">Ex hacienda la llave, Col. la llave, Zimapán, Hgo.</strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed menu" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        ¿Cuánto puedo donar?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body menu1">
                        La cantidad que puedes donar <strong class="menu1">es a partir de 100 pesos.</strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed menu" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ¿Son una donataria autorizada?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body menu1">
                        Transitando Hacia la Sustentabilidad <strong class="menu1">sí es una donataria autorizada por el SAT.</strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed menu" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        ¿Recibiré un CFDI si doy un donativo?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body menu1">
                        La asociación <strong class="menu1">te entrega el CFDI antes de cada 30 del mes.</strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed menu" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        ¿Cómo puedo ser voluntario?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body menu1">
                        Para ser voluntario <strong class="menu1">En el apartado de voluntarios tenemos un botón de únete para que puedas llenar un formulario, o puedes contactarnos mediante un correo o una llamada telefónica.</strong> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        // Función para alternar la visibilidad del mapa
        function toggleMap() {
            var mapElement = document.getElementById('map');
            if (mapElement.style.display === 'none' || mapElement.style.display === '') {
                mapElement.style.display = 'block';
                initializeMap();
            } else {
                mapElement.style.display = 'none';
            }
        }

        function initializeMap() {
            if (!navigator.geolocation) {
                alert('Geolocation is not supported by your browser');
                return;
            }

            // Obtener la ubicación actual del usuario
            navigator.geolocation.getCurrentPosition(function(position) {
                var userLat = position.coords.latitude;
                var userLng = position.coords.longitude;

                // Coordenadas de destino
                var destinationLat = 20.73651342846173;
                var destinationLng = -99.38356971349161;

                // Crear el mapa
                var map = L.map('map').setView([destinationLat, destinationLng], 13);

                // Añadir el mapa base de OpenStreetMap
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                // Añadir un marcador para la ubicación del usuario
                var userMarker = L.marker([userLat, userLng]).addTo(map)
                    .bindPopup('Estás aquí')
                    .openPopup();

                // Añadir un marcador para la ubicación de destino
                var destinationMarker = L.marker([destinationLat, destinationLng]).addTo(map)
                    .bindPopup('Destino')
                    .openPopup();

                // Añadir una línea entre las ubicaciones del usuario y el destino
                var route = L.polyline([[userLat, userLng], [destinationLat, destinationLng]], {
                    color: 'blue',
                    weight: 5,
                    opacity: 0.7
                }).addTo(map);
            }, function(error) {
                if (error.code === error.PERMISSION_DENIED) {
                    alert('Por favor, activa la geolocalización en tu navegador');
                } else {
                    alert('No se pudo obtener tu ubicación');
                }
            });
        }
    </script>
</body>
@endsection

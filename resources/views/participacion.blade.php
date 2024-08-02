@extends('layouts.app')

@section('content')
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }
        .seccion1 {
            background-image: url('img/hojitas4.webp');
            background-size: cover;
            background-position: center;
            padding: 50px 0;
        }
        .titulo {
            color: black;
            font-size: 2.5rem;
            font-family: 'Claphappy', sans-serif;
            text-align: center;
            margin-bottom: 30px;
        }
        .texto {
            font-family: 'Bellerose', sans-serif;
            font-size: 1.25rem;
            text-align: center;
            margin-bottom: 30px;
        }
        .btn-custom {
            background-color: #7ab730;
            border-color: #7ab730;
            color: white;
            border-radius: 8px;
            text-align: center;
            width: 90%;
            display: block;
            margin: 10px auto;
        }
        .btn-custom:hover {
            background-color: #689d28;
            border-color: #689d28;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card__image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .card__info {
            background-color: #ffffff;
            color: #000;
            text-align: center;
            padding: 10px 0;
        }
        .card__content {
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .card__title {
            font-size: 1.125rem;
            margin-bottom: 10px;
        }
        .contenedor {
            max-width: 1000px;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .tarjeta {
            width: 250px;
            height: 250px;
            background-size: cover;
            background-position: center;
            position: relative;
            margin-top: 20px;
        }
        .tarjeta::before {
            content: "";
            width: 100%;
            height: 100%;
            position: absolute;
            transition: 300ms all ease;
            border-bottom: 5px solid #e00434;
        }
        .tarjeta:hover::before {
            height: 0;
            transition: 0.5s all ease;
        }
        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px;
            text-align: center;
            border-top: 1px solid rgba(256, 256, 256, .1);
        }
    </style>

    <body>
        <div class="container-fluid p-0">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="img/IMG_1672.webp" alt="Image">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sección de Actividades del mes -->
            <div class="seccion1">
                <div class="container">
                    <h1 class="titulo">Actividades del mes</h1>
                    <div class="row g-3">
                        @foreach($activities as $activity)
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card__image-container">
                                    <img src="{{ asset('storage/' . $activity->image) }}" alt="Activity Image">
                                </div>
                                <div class="card__info">
                                    <p class="text--medium">{{ \Carbon\Carbon::parse($activity->date)->isoFormat('D [de] MMMM') }}</p>
                                </div>
                                <div class="card__content">
                                    <p class="card__title text--medium">{{ $activity->description }}</p>
                                    <a href="{{ asset('storage/' . $activity->pdf) }}" target="_blank" class="btn btn-custom btn-circle btn-lg">Ver Actividad</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            

            <!-- ODS -->
            <center>
                <h1 class="titulo">Objetivos De Desarrollo Sostenible</h1>
                <p class="texto">Desarrollo que satisface las necesidades del presente sin comprometer la capacidad de las futuras generaciones garantizando el equilibrio entre el crecimiento económico, el cuidado del medio ambiente y el bienestar social. Es por eso que una de nuestras prioridades es alinear cada una de las operaciones con los objetivos de desarrollo sostenible (ODS)</p>
            </center>
            <div class="contenedor">
                <a href="https://www.un.org/sustainabledevelopment/es/poverty/">
                    <div class="tarjeta" style="background-image: url('img/ods 1_0.webp');"></div>
                </a>
                <a href="https://www.un.org/sustainabledevelopment/es/poverty/">
                    <div class="tarjeta" style="background-image: url('img/fin.webp');"></div>
                </a>
                <a href="https://www.un.org/sustainabledevelopment/es/poverty/">
                    <div class="tarjeta" style="background-image: url('img/cero.webp');"></div>
                </a>
                <a href="https://www.un.org/sustainabledevelopment/es/poverty/">
                    <div class="tarjeta" style="background-image: url('img/educa.webp');"></div>
                </a>
                <a href="https://www.un.org/sustainabledevelopment/es/poverty/">
                    <div class="tarjeta" style="background-image: url('img/6a.png');"></div>
                </a>
                <a href="https://www.un.org/sustainabledevelopment/es/poverty/">
                    <div class="tarjeta" style="background-image: url('img/07.webp');"></div>
                </a>
                <a href="https://www.un.org/sustainabledevelopment/es/poverty/">
                    <div class="tarjeta" style="background-image: url('img/11.webp');"></div>
                </a>
                <a href="https://www.un.org/sustainabledevelopment/es/poverty/">
                    <div class="tarjeta" style="background-image: url('img/Alianza.webp');"></div>
                </a>
                <!-- Repite el div de tarjeta para otros ODS -->
            </div>
        </div>
            <!-- Footer -->
            <div class="footer">
                &copy; TRANSITANDO HACIA LA SUSTENTABILIDAD S.A
            </div>

            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="lib/tempusdominus/js/moment.min.js"></script>
            <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
            <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
            <script src="mail/jqBootstrapValidation.min.js"></script>
            <script src="mail/contact.js"></script>
            <script src="js/main.js"></script>
        </div>
    </body>
@endsection

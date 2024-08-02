@extends('layouts.app')
@section('content')
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
   
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .seccion {
            height: 120vh;
        }

        .seccion1 {
            background-image: url('img/hojitas4.webp');
        }

        .seccion2 {
            background-image: url('img/hojitas4.webp');
            height: 160vh;
        }
        .seccion3 {
            background-image: url('img/hojitas4.webp');
            height: 190vh;
        }

        
    </style>
      <style>
          .card-img-top {
            width: 100%;
            height: 700px;
            max-height: 400px; /* Ajusta esta altura según sea necesario */
            max-width: 100%; /* Asegura que la imagen no se salga del contenedor */
        }
        .card-body {
            font-size: 1.5rem; /* Ajusta el tamaño del texto */
        }
        .card-text {
            font-size: 1.3rem; /* Ajusta el tamaño del texto */
        }
        .card {
            max-width: 900px; /* Ajusta el ancho máximo de la tarjeta */
        }
          .btn-custom {
            background-color: #7ab730;
            border-color: #7ab730;
            color: white;
        }
        .btn-custom:hover {
            background-color: #7ab730;
            border-color: #7ab730;
            color: white;
        }
    </style>
     <style>
        .btn-green {
            background-color: #7ab730;
            border-color: #7ab730;
            color: white;
        }

        .btn-green:hover {
            background-color: #218838;
            border-color: #1e7e34;
            color: white;
        }

       
        .btn-custom {
            background-color: #7ab730;
            border-color: #7ab730;
            color: white;
        }

  /* Ajustar la medida del cuadro de la imegnes de inicio  */ 
  @media (min-width: 992px) {
    .about-text {
      margin-left: -90px;
  
    }
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
.titulo1 {
      color: black;
      font-size: 20px;
      font-family: 'Claphappy', sans-serif;
}

.texto {
  font-family: 'Bellerose', sans-serif;
  font-size: 20px;
}



    </style>
</head>

<body>
   
  
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/equipo.jpg" alt="Image">
                    <div class="d-flex flex-column align-items-center justify-content-center"></div>
                </div>
                <div class="confeti-container"></div>
               
            </div>
        </div>
    </div>
   

    <!-- Booking Start -->
    <div class="seccion seccion1">
        <div class="container-fluid position-relative nav-bar p-0">
            <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
                <nav class=" navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                    <center>

                        <div class="content15">
                            <h2 class="titulo">¿Qué Hacemos?</h2>
                            <p class="texto">En Transitando Hacia la Sustentabilidad trabajamos en dejar legados positivos que brinden a las comunidades que conviven directamente con el sector minero capacidades autogestivas, para que a través del trabajo colectivo transformen su entorno y su calidad de vida de una forma sustentable</p>
                            <a href="{{ url('/registro') }}" class="btn btn-custom btn-circle btn-lg">Únete</a>

                        </div>


                        
                    </center>
                    <br>
                    <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse"></div>
                </nav>
            </div>



        
        
        
        
        
        

           
       


            
            <div class="seccion1">
                <div class="container-fluid py-5">
                    <div class="container pt-5">
                        <div class="row">
                            <div class="col-lg-6" style="min-height: 500px;">
                                <div class="position-relative contenedor12 h-100">
                                    <img class="position-absolute w-100 h-100 imagen" src="img/mau.webp" style="object-fit: cover;">
                                </div>
                            </div>
                            
                            <div class="col-lg-6 pt-5 pb-lg-5 position-relative">
                                <div class="about-text bg-white p-4 p-lg-5 my-lg-5 borderp">
                                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;"></h6>
                                    <h1 class="titulo1">#YOSOYEQUIPOTRANSITANDO</h1>
                                    <p class="texto">“No requerimos de magia para cambiar el mundo. Ya llevamos toda la fuerza que necesitamos dentro de nosotros mismos: tenemos el poder de imaginarnos mejor” – K. Rowling.</p>
                                </div>
                                <div class="container-fluid">
                                    <div class="container pt-5 pb-3">
                            </div>
                        </div>
                    </div>
                </div>
            
            
   
    


                <div class="container-fluid py-5 font-bellerose">
                    <div class="container pt-5">
                        <div class="row justify-content-center">   
                            <center>
                            <h1 class="titulo">Lider Voluntario</h1>  
                            </center>
  
                            @section('title', 'Archivos Voluntarios')
                            <div class="container mt-5">
                                <div class="row justify-content-center">
                                    @foreach ($files as $file)
                                    <div class="col-md-8 mb-4 d-flex justify-content-center">
                                        <div class="card">
                                            <img src="{{ asset('storage/' . $file->path) }}" class="card-img-top" alt="{{ $file->filename }}">
                                            <div class="card-body">
                                                <p class="texto">{{ $file->description }}</p>
                                                <h1 class="titulo">Lider Voluntario</h1> 
                                                <p class="texto" ><strong></strong> {{ $file->name }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                        
            </div>  
         </div>  
    </div> 

</div>
                        
</style>

   
<div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1)!important;">
    <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
            &copy; TRANSITANDO HACIA LA SUSTENTABILIDAD S.A
           
        </div>
    </div>
</div>

    <link href="https://fonts.googleapis.com/css2?family=Claphappy&family=Bellerose&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Bellerose&display=swap" rel="stylesheet">


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>


@endsection
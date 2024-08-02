@extends('layouts.app')
@section('content')

    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
     <!--bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Favicon -->
 

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />


 
   
    <style>
  /* Ajustar la medida del cuadro de la imegnes de inicio  */ 
  @media (min-width: 992px) {
    .about-text {
      margin-left: -90px;
  
    }
  }


        body {
            margin: 0;
            padding: 0;
        }
        .seccion {
            height: 100vh; /* Opcional: altura de cada sección a pantalla completa */
        }
        .seccion1 {
            background-image: url('img/hojitas4.webp');
            height: 95vh;
        }
        .seccion2 {
            background-image: url('img/hojitas4.webp');
            height: 120vh;
        }

        .container-fluid {
            font-family: 'claphappy';
        }

        .menu {
        font-family: 'claphappy';
    }
  
    .menu1{
    text-align: center;
    font-family: 'Bellerose', sans-serif;
  font-size: 20px;
  color: black;
  }
  
        @font-face {
  font-family: 'Claphappy';
  src: url('/fonts/Claphappy.ttf') format('truetype');
}

@font-face {
  font-family: 'Bellerose';
  src: url('/fonts/Bellerose.ttf') format('truetype');
}

.titulos {
  font-family: 'Claphappy', sans-serif;
  font-size: 25px;
}

.texto {
  font-family: 'Bellerose', sans-serif;
  font-size: 20px;
}
        /* Agrega estilos para otras secciones si es necesario */
    </style>
</head>

<body>
    
  
   <br><br>
                    <img class="w-100" src="img/IMG_1838.webp" alt="Image">
                    

    <!-- Testimonial Start -->
    <div class="seccion seccion1">
        <div class="seccion seccion1">
            <br><br><br>
            <div class="container py-5">
                <div class="text-center mb-3 pb-3">
                    <center><h1 class="titulos"> Nuestra Historia</h1></center>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="text-center pb-4">
                        <img class="img-fluid mx-auto" src="img/Color.webp" style="width: 250px; height: 100px;">
                        <div class="testimonial-text bg-white p-4 mt-n5">
                            <p class="mt-5 texto">Nacimos en el año 2017 de la necesidad de las comunidades que tienen contacto directo con la industria minera 
                            </p>
                        </div>
                    </div>
                    <div class="text-center">
                        <img class="img-fluid mx-auto" src="img/IMG_1741-2.webp" style="width: 250px; height: 140px;">
                        <div class="testimonial-text bg-white p-4 mt-n5">
                            <p class="mt-5 texto">Identificamos las comunidades con las que podiamos trabajar para poder encaminar a un desarrollo comunitario sustentable 
                            </p>
                        </div>
                    </div>
                    <div class="text-center">
                        <img class="img-fluid mx-auto" src="img/IMG_1655.webp" style="width: 250px; height: 140px;">
                        <div class="testimonial-text bg-white p-4 mt-n5">
                            <p class="mt-5 texto">En el año 2019 conseguimos ser donataria autorizada <br><br><br>                                              
                            </p>
                        </div>
                    </div>
                    <div class="text-center">
                        <img class="img-fluid mx-auto" src="img/IMG_1529.webp" style="width: 250px; height: 140px;;">
                        <div class="testimonial-text bg-white p-4 mt-n5">
                            <p class="mt-5 texto">Actualmente desarrollamos proyectos enfocados a nuestros 4 ejes de acción <br><br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <center><img width="100%" height="80%" src="img/imagen1.jpg"></center>

    <link href="https://fonts.googleapis.com/css2?family=Claphappy&family=Bellerose&display=swap" rel="stylesheet">

    <!-- About Start -->
<div class="seccion2">
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative contenedor12 h-100">
                        <img class="position-absolute w-100 h-100 imagen" src="img/1.webp" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5 position-relative">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5 borderp">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;"></h6>
                        <h1 class="titulos">Objetivo</h1>
                        <p class="texto">Dejamos huella en las comunidades que conviven directamente con el sector minero beneficiando a grandes y pequeños a través de diversos proyectos que impulsen su desarrollo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


   
        <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1)!important;">
            <div class="row">
                <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                    &copy; TRANSITANDO HACIA LA SUSTENTABILIDAD S.A
                   
                </div>
            </div>
        </div>
    


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
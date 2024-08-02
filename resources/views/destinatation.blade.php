@extends('layouts.app')
@section('content')
    <meta name="keywords" content="Free HTML Templates">
    <meta name="description" content="Free HTML Templates">
     <!--bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="lib/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
   
  
   
   
    <script src="7/ninja-slider.js" type="text/javascript"></script>
    <script src="js/video.js" type="text/javascript"></script>
    <style>
   
      .seccion2 {
          height: -210vh;
          background-image: url('img/hojitas4.webp');
      }

   
      .prog .container {
          margin-bottom: 20px;
      }
      .row {
          display: flex;
          flex-wrap: wrap;
          gap: 10px; /* Espacio entre las tarjetas */
      }
      .col-md-4 {
          flex: 1 1 calc(33.333% - 10px); /* Tres columnas con espacio entre ellas */
          box-sizing: border-box;
      }
      .content {
          position: relative;
          width: 80%;
          overflow: hidden;
          border-radius: 10px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      }
      .content img {
          width: 100%;
          height: auto;
          display: block;
      }
      .content-overlay {
          background: rgba(0, 0, 0, 0.5);
          position: absolute;
          height: 100%;
          width: 100%;
          left: 0;
          top: 0;
          opacity: 0;
          transition: opacity 0.4s ease-in-out;
      }
      .content:hover .content-overlay {
          opacity: 1;
      }
      .content-details {
          position: absolute;
          text-align: center;
          width: 100%;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          opacity: 0;
          transition: opacity 0.3s ease-in-out;
      }
      .content:hover .content-details {
          opacity: 1;
      }
      .content-title {
          color: white;
          font-size: 1.5em;
          margin: 0;
      }
      .content-text {
          color: white;
          font-size: 1em;
      }

      .menu {
        font-family: 'Claphappy';
        font-size: 20px;
        color: black;
    }

    .btn-custom:hover {
        background-color: #689d28;
        border-color: #689d28;
        color: white;
    }
    /* Agrega estilos para otras secciones si es necesario */

    li{
      float: left;
    }



.galeria {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 0 auto;
            padding: 5px;
            background: #fff;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            border: ridge #03;
        }

        .galeria div {
            padding: 7px;
            flex: 1 1 100px; /* Allow flex items to grow and shrink */
            text-align: center;
        }

        .galeria div img {
            width: 100px;
            transition: .1s transform;
        }

        .galeria div:hover {
            z-index: 1;
        }

        .galeria div img:hover {
            transform: scale(2);
            transition: .3s transform;
        }

        .menu {
            font-size: 40px;
        }

        

 li.video {
    flex-grow: 1;
    position: relative;
    ooverflow: hidden;
      width: 33.333333333%;
      width: -webkit-calc(100% / 3);
      width: calc(100% / 3);
    border: solid 0.2em transparent;
    
    & a {
      outline: none;
    }
        
    &:before {
      content: '';
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #7AB730;
      transition: background-color .15s;
    }
    
    & figure {
      display: block;
      position: relative;
      overflow: hidden;
      background-repeat: no-repeat;
      background-position: center center;
      background-size: cover;
      
      & img {
        display: block;
        max-width: 100%;
        height: auto;
        opacity: 0;
        transform: scale(0.5);
        transition: all .20s;
      }
  
      & figcaption {
        position: absolute;
        bottom: 0;
        width: 100%;
        background: rgba(0,0,0,0.6);
        color: #fff;
        font-size: 1.4rem;
        font-weight: 600;
        padding: 1rem;
        transform: translateY(0);
        opacity: 1;
        transition: all .20s;
      }
    }
    
    &:hover {
      & figure {
        & img {
          opacity: 1;
          transform: scale(1);
        }
        
        & figcaption {
          opacity: 0;
          transform: translateY(50%);
        }
      }
    }
    
    &:hover:before {
      background-color: rgba(0, 0, 0, 0.3);
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

.texto {
  font-family: 'Bellerose', sans-serif;
  font-size: 20px;
}
 
  

  
  </style>
</head>
<br>
<body>
<div class="container-fluid p-0">
      <div id="header-carousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img class="w-100" src="img/IMG_0084.webp" alt="Image">
                  <div class="d-flex flex-column align-items-center justify-content-center"></div>
              </div>
          </div>
      </div>
  </div>
  <!-- Carousel End -->

  <div class=" seccion2">
    <center><h1 style="font-size: 40px;"  class="titulo">Actividades activas</h1></center>
   

    <div class="prog">
        <div class="container">
            <div class="row">
               

                @foreach($documents as $document)
                <div class="col-md-4 mb-4">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="{{ asset('storage/' . $document->image_path) }}" alt="Document Image">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title menu1">{{ $document->title }}</h3>
                            <a href="{{ asset('storage/' . $document->pdf_path) }}" target="_blank" class="content-text menu4">Open PDF</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


<center>
  
  <header class="header" role="banner">
    <center><h1 style="font-size: 40px;" class="titulo">Videos</h1></center>
  </header>
  <br><br><br>
  <main role="main">
    <section class="videos" id="featured-videos">
      <div class="video-grid front-page" id="front-page-videos">
        <ul class="video-list featured">
          <li class="video featured">
            <a data-fancybox href="https://youtu.be/Q2dmA2kVv0M" class="featured-video">
              <figure style="background-image: url(img/IMG_1678.webp);">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                <figcaption class="titulo">Somos Equipo Transitando</figcaption>
              </figure>
            </a>
          </li>
          <li class="video featured">
            <a data-fancybox href="https://youtu.be/sdpsZEt5uuw" class="featured-video">
              <figure style="background-image: url(img/IMG_3074.webp);">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                <figcaption  class="titulo">Donativo Bicicleta</figcaption>
              </figure>
            </a>
          </li>
          <li class="video featured">
            <a data-fancybox href="https://youtu.be/40QFHin5j18" class="featured-video">
              <figure style="background-image: url(img/IMG_1512.webp);">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                <figcaption  class="titulo">Navidad Solidaria</figcaption>
              </figure>
            </a>
          </li>
        </ul>
      </div
    </section>
<br><br><br> <br><br><br><br<br><br><br><br><br><br> <br><br>
    <main>
      <div class="container">
        <center>
          <h1 class="titulo">Nuestros Aliados</h1>
      </center>

          <div class="row galeria">
              <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                  <img src="img/xy.webp" class="img-fluid" alt="Aliado 1"/>
              </div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                  <img src="img/CARRIZAL-MINNING.png" class="img-fluid" alt="Aliado 2"/>
              </div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                  <img src="img/utmz.png" class="img-fluid" alt="Aliado 3"/>
              </div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                  <img src="img/villa.webp" class="img-fluid" alt="Aliado 4"/>
              </div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                  <img src="img/Sin-título-2.jpg" class="img-fluid" alt="Aliado 5"/>
              </div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                  <img src="img/uaeh.webp" class="img-fluid" alt="Aliado 6"/>
              </div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                  <img src="img/eco.webp" class="img-fluid" alt="Aliado 7"/>
              </div>
          </div>
      </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
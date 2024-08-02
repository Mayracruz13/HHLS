@extends('layouts.app')
@section('content')
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }
        .seccion {
            height: 100vh;
            background-size: cover;
            background-position: center;
        }
        .seccion1 {
            background-image: url(img/hojitas4.webp);
        }
        .seccion2 {
            background-image: url(img/hojitas4.webp);
            height: auto;
            padding: 50px 0;
        }
        .seccion3 {
            background-image: url(img/hojitas4.webp);
            height: auto;
            padding: 50px 0;
        }
        .seccion4 {
            background-image: url(img/hojitas4.webp);
            height: auto;
            padding: 20px 0;
        }

        .btn-custom {
            background-color: #7ab730;
            border-color: #7ab730;
            color: white;
        }
        .btn-custom:hover {
            background-color: #689d28;
            border-color: #689d28;
            color: white;
        }

        .cards-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            padding-bottom: 60px;
        }

        .flip-card {
            width: 300px;
            height: 400px;
            perspective: 2000px;
            margin: 15px;
        }
        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            border-radius: 28px;
            transition: transform 550ms cubic-bezier(0.1, 0.22, 0.8, 1.13);
            transform-style: preserve-3d;
        }
        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
        }
        .flip-card-front {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .flip-card-back {
            font-size: 1.25rem;
            text-align: center;
            display: grid;
            place-items: center;
            padding: 20px;
            transform: rotateY(180deg);
        }
        .color { background-color: #DF5327; }
        .color1 { background-color: #418Ab3; }
        .color2 { background-color: #D7D447; }
        .color3 { background-color: #FE9E00; }
        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .container45 {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            padding: 50px;
        }

        .card12 {
            width: 300px;
            height: 300px;
            background: white;
            border-radius: 20px;
            transition: height 0.5s, box-shadow 0.5s;
            box-shadow: 0 35px 80px rgba(0, 0, 0, 0.15);
            position: relative;
        }
        .card12:hover {
            height: 400px;
        }

        .img-box16 {
            width: 100%;
            height: 200px;
            background: #333;
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.5s, box-shadow 0.5s;
        }
        .card12:hover .img-box16 {
            transform: scale(0.75);
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.2);
        }
        .img-box16 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .content15 {
            text-align: center;
            padding: 20px;
        }

      


        .container45 {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      gap: 100px 50px;
      padding: 100px 50px;
  }
  
  .container45 .card12 {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      width: 300px;
      max-width: 100%;
      height: 360px;
      background: white;
      border-radius: 20px;
      transition: 0.5s;
      box-shadow: 0 35px 80px rgba(0, 0, 0, 0.15);
  }
  .container45 .card13:hover {
    height: 130px;
}

  
  .container45 .card12:hover {
      height: 547px;
  }
  
  .container45 .card12 .img-box16 {
      position: absolute;
      top: 20px;
      width: 280px;
      height: 210px;
      background: #333;
      border-radius: 12px;
      overflow: hidden;
      transition: 0.5s;
  }
  
  .container45 .card12:hover .img-box16 {
      top: -100px;
      scale: 0.75;
      box-shadow: 0 15px 45px rgba(0, 0, 0, 0.2);
  }
  
  .container45 .card12 .img-box16 img {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
  }
  
  .container45 .card12 .content15 {
      position: absolute;
      top: 245px;
      width: 100%;
      height: 65px;
      padding: 0 12px;
      text-align: center;
      overflow: hidden;
      transition: 0.5s;
  }

  
  .container45 .card12 .content15 {
      position: absolute;
      top: 245px;
      width: 100%;
      height: 65px;
      padding: 0 12px;
      text-align: center;
      overflow: hidden;
      transition: 0.5s;
  }
  
  .container45 .card12:hover .content15 {
      top: 80px;
      height: 650px;
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

    <!-- Topbar Start -->
    <br><br>

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/5jpg.webp" alt="Image">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- Add caption if needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Organigrama -->
    <div class="seccion3">
        <br><br><br><br>
        <style>
            .custom-size {
              width: 1100px; /* Ajusta el tamaño según tus necesidades */
              height: auto; /* Mantiene la proporción de la imagen */
            }
          </style>
          <center>
            <img src="img/Imagen2.jpg" class="img-fluid" style="width: 80%; max-width: 800px;" alt="Imagen Ajustable">
        </center>
        
          
    </div>
    <!-- End Organigrama -->

    <div class="seccion seccion3">
        <br>
        <center>
            <h1 class="titulo">Conoce nuestros ejes de acción</h1>
            <br><br><br>
        </center>
        <div class="cards-grid">
            <!-- Flip Cards -->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front" style="background-image: url('img/Ejes/Ejes-03.webp');"></div>
                    <div class="flip-card-back color">
                        <p class="texto">Buscamos que las comunidades a través de diversos proyectos tengan la capacidad de organizarse para gestionar temas de interés o impacto en su comunidad de manera rápida, segura y sostenible</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front" style="background-image: url('img/Ejes/Ejes-02.webp');"></div>
                    <div class="flip-card-back color1">
                        <p class="texto">Es un proceso de co-construcción de competencias a través de talleres y capacitaciones enfocadas a las necesidades de cada comunidad</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front" style="background-image: url('img/Ejes/Ejes-04.webp');"></div>
                    <div class="flip-card-back color2">
                        <p class="texto">Implementación de acciones que beneficien a la economía popular y por ende a las comunidades</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front" style="background-image: url('img/Ejes/Ejes_Mesa de trabajo 1.webp');"></div>
                    <div class="flip-card-back color3">
                        <p class="texto">Buscamos apoyar el desarrollo de las comunidades indígenas de Zimapán, buscando preservar sus costumbres y tradiciones</p>
                    </div>
                </div>
            </div>
        </div>

        <center>
            @if ($pdf)
                <a href="{{ asset('storage/pdfs/' . $pdf->filename) }}" target="_blank" class="btn btn-custom btn-circle btn-lg">
                    Ver Informe del año
                </a>
            @else
                <p>No hay informes disponibles.</p>
            @endif
            </center>
    </div>
    

    
</div>


<!-- Blog Start -->
<script>
    window.addEventListener('scroll', function()  {
        let elements = document.getElementsByClassName('scroll-content');
        let screenSize = window.innerHeight;

        for (var i = 0; i < elements.length; i++) {
            var element = elements[i];

            if (element.getBoundingClientRect().top < screenSize) {
                element.classList.add('visible');
            } else {
                element.classList.remove('visible');
            }
        }
    });
</script>
<!-- Inicia quienes somos -->
<div class="seccion2">
    <div class="container45">
        <div class="card12" style="--clr: #009688">
            <div class="img-box16">
                <img src="img/ths.webp">
            </div>
            <div class="content15">
                <br>
                <h2 class="titulo">¿Qué Hacemos?</h2>
                <p class="texto">En Transitando Hacia la Sustentabilidad trabajamos en dejar legados positivos que brinden a las comunidades que conviven directamente con el sector minero capacidades autogestivas, para que a través del trabajo colectivo transformen su entorno y su calidad de vida de una forma sustentable</p>
            </div>
        </div>
        <div class="card12" style="--clr: #FF3E7F">
            <div class="img-box16">
                <img src="img/miri1.webp">
            </div>
            <div class="content15">
                <br>
                <h2 class="titulo">¿Cómo lo hacemos?</h2>
                <p class="texto">Mantenemos un vínculo cercano con cada comunidad, esto nos permite conocer sus fortalezas y áreas:</p>
                <p class="texto"> 1.-Visitas comunitarias</p>
                <p class="texto"> 2.-Identificación de necesidades</p>
                <p class="texto"> 3.-Planificación de proyectos</p>
                <p class="texto"> 4.-Colaboración</p>
                <p class="texto"> 5.-Aplicación</p>
                <p class="texto"> 6.-Monitoreo</p>
                
            </div>
        </div>
        <div class="card12" style="--clr: #03A9F4">
            <div class="img-box16">
                <img src="img/n.webp">
            </div>
            <div class="content15">
                <h2 class="titulo">¿A quiénes beneficiamos?</h2>
                <p class="texto">-Garabatos, Xodhé, Tadhé</p>
                <p class="texto">-Verdosas, El Mezquite</p>
                <p class="texto">-Iglesia Vieja, Detzani</p>
                <p class="texto">-San Francisco, El Barrón, El Dedhó</p>
                <p class="texto">-San Felipe, San Andrés</p>
                <p class="texto"> -Cristóbal, Adjuntas, Las Vegas</p>
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

@endsection

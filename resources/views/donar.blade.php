@extends('layouts.app')
@section('content')
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!--bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
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

    <!-- Customized Bootstrap Stylesheet -->
    <
    <!--github libreria-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet"> 

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<style>
    body {
        margin: 0;
        padding: 0;
    }
    .seccion {
        height: 520vh; /* Opcional: altura de cada sección a pantalla completa */
    }
    .seccion1 {
        background-image: url('img/hojitas4.webp');
    }
    
    /* titulos para menu */
    .menuu {
        padding: 5px 15px;
      color: black;
      font-weight: 500;
      font-size: 25px;
      outline: none;
      font-family: 'Claphappy', sans-serif;
    }

    .menuu1 {
        padding: 5px 15px;
      color: black;
      font-weight: 500;
      font-size: 25px;
      outline: none;
      font-family: 'Claphappy', sans-serif;
    }
  
  
    .container123 {
    width: 90%;
    max-width: 1200px;
    margin: 100px auto;
    display: flex;
    flex-direction: column;
    position: relative;
  }
  
  .container123::after {
    content: "";
    width: 2px;
    height: 100%;
    background: #1b3231;
    position: absolute;
    top: 0;
    left: calc(50% - 1px);
    z-index: 1;
  }
  
  .evento {
    display: flex;
    justify-content: space-between;
    margin-bottom: 200px;
    position: relative;
  }
  
  .evento::after {
    content: "";
    display: block;
    width: 14px;
    height: 14px;
    border-radius: 100px;
    background: #DCDFD9;
    border: 2px solid #1b3231;
    position: absolute;
    z-index: 2;
    top: calc(50% - 9px);
    left: calc(50% - 9px);
  }
  

  .menu11 {
    font-family: 'Bellerose', sans-serif;
    font-size: 20px;
    color: black;
}

  .fecha {
    display: flex;
    align-items: center;
    justify-content: start;
    width: calc(42% + 20px);
   
    font-weight: normal;
    font-family: 'Bellerose', sans-serif;
    font-size: 20px;
    color: black;

  }
  .titulo {
    padding: 5px 15px;
      color: black;
      font-weight: 500;
      font-size: 25px;
      outline: none;
      font-family: 'Claphappy', sans-serif;
}

.text {
    font-family: 'Bellerose', sans-serif;
    font-size: 20px;
}
  
  .foto {
    width: 42%;
    border: 10px solid #fff;
    position: relative;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  }
  
  img,
embed,
svg,
audio,
canvas,
iframe,
video {
  max-width: 100%;
  height: auto;
  vertical-align: middle;
}


  

</style>



</head>
<br><br><br>
<body>
   

    
    <!-- Carousel End -->

    <div class="seccion seccion1">   
        <div class="text-center mt-3">
            <img src="img/IMG_3074.webp" class="img-fluid custom-img" alt="Responsive Image">
        </div>  
        <center>  
    <h1 class="menuu">3 Razones para donar</h1></center> 
    <br>    <br>
    <center><table>
        <tr>
            <th><img width="400px" src="img/Mayo AC-10.webp"></th>
            <th><img width="400px"  src="img/Mayo AC-11.webp"></th>
            <th><img width="400px"  src="img/Mayo AC-12.webp"></th>
        </tr>
    </table></center>
    <br>
    <center>
     <h1 class="menuu">¿Cómo convertirte en donador?</h1></center>
    
    <div class="container123">
        <div class="evento">
            <div class="foto" data-aos="zoom-in">
                <img src="img/Color.webp" alt="">
                <center><h3 class="menuu1">Conoce THS</h3></center>   
            </div>
            <h3 class="fecha" class="text"  >Acércate a nosotros, conoce nuestros ejes, los proyectos que realizamos, las comunidades con las que trabajamos, y nuestro programa de voluntariado</h3>
        </div>
        <div class="evento">
            <div class="foto" data-aos="zoom-in">
                <img src="img/IMG_1650.webp" alt="">
                <center><h3 class="menuu1">Conviértete en benefactor</h3></center>   
            </div>
            <h3 class="fecha">Si tu donativo es en especie, escríbenos vía WhatsApp para enviarte la ubicación de nuestras oficinas para la entrega. </h3>
        </div>
        <div class="evento">
            <div class="foto" data-aos="zoom-in">
                <img src="img/IMG_2820.webp" alt="">
                <center><h3 class="menuu1">Donativo económico</h3></center>   
            </div>
            <h3 class="fecha">Define qué cantidad te gustaría donar.
                El donativo puede ser a partir de $100.</h3>
        </div>
        <div class="evento">
            <div class="foto" data-aos="zoom-in">
                <img src="img/_MG_0388.webp" alt="">
                <center><h3 class="menuu1">Haz tu donativo!</h3></center>   
            </div>
            <h3 class="fecha">
                Envíanos tu comprobante por WhatsApp y recibe tu CFDI.
                ¡Listo! Comparte.</h3>
            </div>
        <div class="evento">
            <div class="foto" data-aos="zoom-in">
                <img src="img/02d51208-cba3-4ca7-9368-34351246fad6.jpg" alt="">
                <center><h3 class="menuu1">Nuestros datos bancarios</h3></center>   
            </div>
            <h3 class="fecha">
                Transitando Hacia la Sustentabilidad
                Asociación Civil
                Banco Santander
                Cuenta 65-50688427-7
                CLABE 014314655068842777</h3>
        </div>
    </div>
</div>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true
    });
</script>

<style>
    .donation-container {
        text-align: center;
        padding: 50px;
    }
    .donation-button {
        margin-top: 80px;
    }

      #section1 {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 120vh;
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
    }

    #section2 {
        background-image: url(img/hojitas4.webp);
        display: flex;
        justify-content: center;
        align-items: center;
        height: -190vh;
        margin: 0;
        font-family: Arial, sans-serif;
      
    }
  
      
    
    #section1 .donation-container {
        text-align: center;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    #section1 .donation-button {
        margin-top: 90px;
    }
    
    .titulo {
    padding: 5px 15px;
      color: black;
      font-weight: 500;
      font-size: 25px;
      outline: none;
      font-family: 'Claphappy', sans-serif;
}

.text {
    font-family: 'Bellerose', sans-serif;
    font-size: 20px;
}

</style>


</head>
<body>
    <div id="section2">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

    <div id="section2">
        
     

        <div class="donation-form">

            <br><br><br> <br><br><br><br><br><br>
            <center>
                <div class="donation-container">
                    <h1 class="menuu1">Donaciones</h1>
                    <center>
                    <h1 class="fecha">Tu contribución es importante para nosotros. ¡Gracias por tu apoyo!</h1>
                    </center>
                    <div id="paypal-button-container" class="donation-button"></div>
                    <form action="{{ url('donacion') }}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-custom btn-circle">Recibir Comprobante</button>
                </div>
            </center>



            <label for="amount">Cantidad a donar (mínimo 10 MXN):</label>
            <input type="number" id="amount" name="amount" min="10" value="10">
            <div class="paypal-button-container" id="paypal-button-container"></div>
        </div>
   
      
    
      
           
    
    <style>
        #section2 {
        padding: 20px;
        text-align: left;
    }
    
    .donation-container {
        margin-bottom: 20px;
    }
    
    .form-container {
        margin-top: 20px;
    }

    .btn {
        display: block;
        margin-top: 10px;
    }

    .btn-custom {
            background-color: #7ab730;
            border-color: #7ab730;
            color: white;
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
    </style>
    

  
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
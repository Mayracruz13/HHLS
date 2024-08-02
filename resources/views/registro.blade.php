<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Voluntarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .seccion2 {
            background-image: url('img/hojitas4.webp');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            padding: 50px 0;
            position: relative;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
        }
        .formulario-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #7ab730;
            text-align: center;
            margin-bottom: 30px;
        }
        .form-group label {
            color: #7ab730;
        }
        .form-control {
            border-color: #7ab730;
        }
        .btn-custom {
            background-color: #7ab730;
            color: white;
            border: none;
        }
        .btn-custom:hover {
            background-color: #6f9e24;
        }
        .alert {
            margin-top: 20px;
        }
        .btn-accept {
            background-color: #7ab730;
            color: white;
            border: none;
        }
        .btn-accept:hover {
            background-color: #6f9e24;
        }
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1050;
        }
        .overlay.hidden {
            display: none;
        }
        .content {
            display: none;
        }
    </style>
</head>
<body>
    <div class="overlay" id="overlay">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Aviso de Privacidad</h5>
                </div>
                <div class="modal-body">
                    <p>Estimado Usuario,</p>
                    <p>Le informamos que con motivo de la publicación en el Diario Oficial de la Federación el 12 de febrero de 2018 de los Lineamientos que establecen los parámetros, modalidades y procedimientos para la portabilidad de datos personales (Lineamientos de Portabilidad), en los cuales se establecieron elementos informativos específicos para el aviso de privacidad integral, a partir del día 18 de junio de 2019, se modificó el cuestionario base de la herramienta Generador de Avisos de Privacidad para el Sector Público (GAP Sector Público) para incluir una sección de portabilidad de datos personales de conformidad con los requisitos señalados en los Lineamientos de Portabilidad.</p>
                    <p>Cualquier duda al respecto, podrá enviarla al correo proyectos@transitandohs.com.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-accept" id="btnAceptar">Aceptar y Continuar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="seccion2">
        <a href="{{ url('/unidos') }}" class="btn btn-custom btn-circle btn-lg">Cerrar</a>
        <div class="container content">
            <div class="formulario-container">
                <h1>Registro de Voluntarios</h1>
                
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <form id="voluntarioForm" action="{{ route('registro.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required maxlength="15">
                    </div>

                    <div class="form-group">
                        <label for="apellidos">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" required maxlength="15">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="telefono">Teléfono:</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" required maxlength="10" placeholder="1234567890">
                    </div>

                    <div class="form-group">
                        <label for="edad">Edad:</label>
                        <input type="number" class="form-control" id="edad" name="edad" required>
                    </div>

                    <div class="form-group">
                        <label for="sexo">Sexo:</label>
                        <select class="form-control" id="sexo" name="sexo" required>
                            <option value="" disabled selected>Seleccione una opción</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="ocupacion">Ocupación:</label>
                        <input type="text" class="form-control" id="ocupacion" name="ocupacion" required maxlength="255">
                    </div>

                    <button type="submit" class="btn btn-custom btn-block">Registrar</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('btnAceptar').addEventListener('click', function() {
            document.getElementById('overlay').classList.add('hidden');
            document.querySelector('.content').style.display = 'block';
        });

        document.getElementById('voluntarioForm').addEventListener('submit', function(event) {
            var edad = document.getElementById('edad').value;
            var ocupacion = document.getElementById('ocupacion').value;

            if (edad < 18) {
                    e.preventDefault();
                    alert('No se puede registrar si eres menor de 18 años.');
                } else if (ocupacion > 20) {
                    e.preventDefault();
                    alert('La ocupación no puede tener más de 20 palabras.');
                }
        });
    </script>
</body>
</html>

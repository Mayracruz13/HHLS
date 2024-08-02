<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recibir Comprobante</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('img/hojitas4.png');
            height: 150vh;
        }
        #seccion {
            
        }
        .formulario-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
            margin-top: 50px;
        }
        h2 {
            color: green;
            text-align: center;
        }
        .form-group label {
            color: green;
        }
        .form-control, .form-control-file {
            border-color: green;
        }
        .btn-primary {
            background-color: green;
            border: none;
        }
        .btn-primary:hover {
            background-color: darkgreen;
        }
        .btn-accept {
            background-color: #7ab730;
            color: white;
            border: none;
        }
        .btn-accept:hover {
            background-color: #7ab730;
        }
    </style>
</head>
<body>
    <div id="seccion">
        <div class="formulario-container">
            <h2>Recibir Comprobante</h2>
            <form action="{{ route('guardar.contribuyente') }}" method="POST" enctype="multipart/form-data">
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
                    <label for="edad">Edad:</label>
                    <input type="number" class="form-control" id="edad" name="edad" required maxlength="2">
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" class="form-control" id="telefono" name="telefono" required maxlength="10">
                </div>
                <div class="form-group">
                    <label for="correo">Correo electrónico:</label>
                    <input type="email" class="form-control" id="correo" name="correo" required>
                </div>
                <div class="form-group">
                    <label for="archivo">Subir archivo (PDF, imagen, etc.):</label>
                    <input type="file" class="form-control-file" id="archivo" name="archivo" required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>

    <!-- Modal de aviso de privacidad -->
    <div class="modal fade" id="avisoModal" tabindex="-1" role="dialog" aria-labelledby="avisoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="avisoModalLabel">Aviso de Privacidad</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Aviso importante respecto a la actualización del Generador de Avisos de Privacidad del Sector Público.</p>
                    <p>Estimado Usuario,</p>
                    <p>Le informamos que con motivo de la publicación en el Diario Oficial de la Federación el 12 de febrero de 2018 de los Lineamientos que establecen los parámetros, modalidades y procedimientos para la portabilidad de datos personales (Lineamientos de Portabilidad), en los cuales se establecieron elementos informativos específicos para el aviso de privacidad integral, a partir del día 18 de junio de 2019, se modificó el cuestionario base de la herramienta Generador de Avisos de Privacidad para el Sector Público (GAP Sector Público) para incluir una sección de portabilidad de datos personales de conformidad con los requisitos señalados en los Lineamientos de Portabilidad.</p>
                    <p>Es importante mencionar que el cambio mencionado no afecta las credenciales de acceso de los usuarios que utilizan esta herramienta informática desde su puesta a disposición el 18 de agosto de 2018, sin embargo, los avisos de privacidad generados entre el 18 de agosto de 2018 al 14 de junio de 2019, no podrán editarse dentro de la herramienta, es decir, los usuarios únicamente podrán ver y descargar sus avisos de privacidad generados en formatos Word y PDF, sin embargo, la opción editar continuará funcionando normalmente en los avisos que se elaboran con posterioridad a la fecha de implementación del cambio referido.</p>
                    <p>Por lo anterior, le recomendamos realizar un análisis de los tratamientos que realiza, para que, si en alguno de estos se actualizan los supuestos para el ejercicio de la portabilidad de datos, y de los cuales ya haya elaborado a través del GAP Sector Público su aviso de privacidad, lo invitamos a hacer uso de la nueva funcionalidad para generar sus avisos de conformidad con lo señalado en la normativa aplicable en la materia.</p>
                    <p>Cualquier duda al respecto, podrá enviarla al correo proyectos@transitandohs.com.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-accept" data-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#avisoModal').modal('show');
        });

        document.getElementById('telefono').addEventListener('input', function (e) {
            this.value = this.value.replace(/\D/g, '').slice(0, 10);
        });
    </script>
</body>
</html>

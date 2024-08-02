<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Contribuyentes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            max-width: 800px;
        }
        h1 {
            color: #7ab730;
            text-align: center;
        }
        .table {
            border-color: #7ab730;
        }
        .table th {
            background-color: #7ab730;
            color: white;
        }
        .table td {
            border-color: #7ab730;
        }
        .seccion2 {
            background-image: url('img/hojitas4.webp');
            height: 100vh;
        }
        .white-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
            background-color: #7ab730;
            border-color: #7ab730;
            color: white;
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
<body>

    <div class="seccion2">
        <a  href="{{ route('dashboard') }}" class="btn btn-custom btn-circle">Cerrar</a>
        <h1 class="titulo">Lista de Contribuyentes</h1>
        
        <div class="container mt-5">
            <div class="white-container">
                <table class="table table-bordered">
                    <thead>
                        <tr class="texto">
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Edad</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Archivo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contribuyentes as $contribuyente)
                            <tr>
                                <td>{{ $contribuyente->id }}</td>
                                <td>{{ $contribuyente->nombre }}</td>
                                <td>{{ $contribuyente->apellidos }}</td>
                                <td>{{ $contribuyente->edad }}</td>
                                <td>{{ $contribuyente->telefono }}</td>
                                <td>{{ $contribuyente->correo }}</td>
                                <td><a href="{{ asset('storage/' . $contribuyente->archivo) }}" target="_blank">Ver Archivo</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

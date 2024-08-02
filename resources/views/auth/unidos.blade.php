<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Voluntarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .table-container {
            max-width: 900px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            color: #7ab730;
            margin-bottom: 30px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .table th {
            background-color: #7ab730;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container table-container">
        <h1>Listado de Voluntarios</h1>
      
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                    <th>Ocupación</th>
                    <th>Fecha de Registro</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registros as $registro)
                <tr>
                    <td>{{ $registro->id }}</td>
                    <td>{{ $registro->nombre }}</td>
                    <td>{{ $registro->apellidos }}</td>
                    <td>{{ $registro->email }}</td>
                    <td>{{ $registro->telefono }}</td>
                    <td>{{ $registro->edad }}</td>
                    <td>{{ $registro->sexo }}</td>
                    <td>{{ $registro->ocupacion }}</td>
                    <td>{{ $registro->created_at->format('d/m/Y H:i') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

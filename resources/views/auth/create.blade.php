<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Actividad</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('img/hojitas4.webp');
            height: 150vh;
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
        .white-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
            background-color: #7ab730;
            color: white;
            border: none;
        }
        .btn-custom:hover {
            background-color: #7ab730;
        }
        .btn-danger {
            background-color: red;
            color: white;
            border: none;
        }
        .btn-danger:hover {
            background-color: darkred;
        }
        .form-label {
            color: #7ab730;
        }
        .form-control {
            border-color: #7ab730;
        }
        .alert {
            margin-top: 20px;
        }
        .form-control::placeholder {
            color: #7ab730;
        }
        .card-img-top {
            max-height: 200px;
            object-fit: cover;
        }
        .table img {
            max-height: 100px;
            object-fit: cover;
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
    <div class="container mt-4">
        <div class="d-flex justify-content-end">
            <a href="{{ route('dashboard') }}" class="btn btn-custom btn-circle mb-4">Cerrar</a>
        </div>

        <div class="white-container">
            <h1 class="titulo">Agregar Actividad</h1>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('activities.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="texto" for="image" class="form-label">Imagen</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
                <div class="mb-3">
                    <label class="texto" for="pdf" class="form-label">PDF</label>
                    <input type="file" class="form-control" id="pdf" name="pdf" required>
                </div>
                <div class="mb-3">
                    <label class="texto" for="description" class="form-label">Descripción</label>
                    <input type="text" class="form-control" id="description" name="description" required>
                </div>
                <div class="mb-3">
                    <label class="texto" for="date" class="form-label">Fecha</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
                <button type="submit" class="btn btn-custom">Agregar Actividad</button>
            </form>
        </div>

        <div class="mt-5">
            <center>
            <h3 class="titulo" class="text-center">Actividades Subidas</h3></center>
            <div class="white-container mt-3 table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="texto">
                            <th>Imagen</th>
                            <th>PDF</th>
                            <th>Descripción</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($activities as $activity)
                        <tr>
                            <td><img src="{{ asset('storage/' . $activity->image) }}" alt="Imagen" class="img-fluid" style="max-height: 100px;"></td>
                            <td><a href="{{ asset('storage/' . $activity->pdf) }}" target="_blank">Ver PDF</a></td>
                            <td>{{ $activity->description }}</td>
                            <td>{{ \Carbon\Carbon::parse($activity->date)->locale('es')->translatedFormat('l, d F Y') }}</td>
                            <td>
                                <form action="{{ route('activities.destroy', $activity->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>

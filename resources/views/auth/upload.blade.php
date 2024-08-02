<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Files</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
      
        .container {
            margin-top: 50px;
            max-width: 800px;
        }
        h2 {
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
            min-height: 100vh;
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
        .table img {
            max-height: 100px;
            object-fit: cover;
            width: 100%;
        }
        .btn-close:hover {
            background-color: darkred;
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
        <div class="container mt-3">
            <div class="d-flex justify-content-end">
                <a href="{{ route('dashboard') }}" class="btn btn-custom btn-circle">Cerrar</a>
            </div>
            <h2 class="titulo">Agregar Representante</h2>
            <div class="container mt-5">
                <div class="white-container position-relative">
                    <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label  class="titulo"  for="files">Seleccionar archivo:</label>
                            <input type="file" class="form-control" name="files[]" multiple required>
                        </div>
                        <div class="form-group">
                            <label class="titulo" for="names">Nombre:</label>
                            <input type="text" class="form-control" name="names[]" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label class="titulo" for="descriptions">Descripción:</label>
                            <textarea class="form-control" name="descriptions[]" placeholder="Descripción"></textarea>
                        </div>
                        <button type="submit" class="btn btn-custom mt-3">Subir</button>
                    </form>

                    @if(session('success'))
                        <div class="alert alert-success mt-3">{{ session('success') }}</div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered mt-3">
                            <thead>
                                <tr class="texto">
                                    <th>Imagen</th>
                                    <th>nombre</th>
                                    <th>Descripcion</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($files as $file)
                                <tr>
                                    <td><img src="{{ asset('storage/' . $file->path) }}" alt="{{ $file->filename }}"></td>
                                    <td>{{ $file->name }}</td>
                                    <td>{{ $file->description }}</td>
                                    <td>
                                        <form action="{{ route('files.delete', $file->id) }}" method="POST" style="display: inline;">
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
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Actividades</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('img/hojitas4.webp');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
        }
        .container {
            margin-top: 50px;
            max-width: 1000px;
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
    <div class="container mt-3 d-flex justify-content-end">
        <a href="{{ route('dashboard') }}" class="btn btn-custom btn-circle">Cerrar</a>
    </div>
    <h2 class="titulo">Agregar Actividades</h2>
   
    <div class="container mt-5">
        <div class="white-container">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="texto" for="title">Titulo:</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="texto" for="image">Imagen:</label>
                    <input type="file" name="image" id="image" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="texto" for="pdf">PDF:</label>
                    <input type="file" name="pdf" id="pdf" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-custom mt-3">Subir</button>
            </form>
        </div>

        <div class="mt-5">
            <center>
            <h3 class="titulo" class="text-center">Actividades Subidas</h3></center>
            <div class="white-container mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="texto">
                                <th>Titulo</th>
                                <th>Imagen</th>
                                <th>PDF</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($documents as $document)
                                <tr>
                                    <td>{{ $document->title }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $document->image_path) }}" alt="{{ $document->title }}" class="img-fluid" style="max-height: 100px;">
                                    </td>
                                    <td>
                                        <a href="{{ asset('storage/' . $document->pdf_path) }}" target="_blank" class="btn btn-primary">Ver PDF</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('documents.destroy', $document->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
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

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>

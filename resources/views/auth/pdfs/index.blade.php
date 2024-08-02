<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Upload</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
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
            background-size: cover;
            background-position: center;
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

    <div class="seccion2 d-flex flex-column align-items-center justify-content-center">
        <div class="container mt-3 d-flex justify-content-end">
            <a href="{{ route('dashboard') }}" class="btn btn-custom btn-circle">Cerrar</a>
        </div>
        <h2 class="titulo">Subir PDF</h2>
        <div class="container mt-5">
            <div class="white-container">
                <form action="{{ route('pdfs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="titulo"  for="pdf">Agregar PDF</label>
                        <input type="file" class="form-control" name="pdf" required>
                    </div>
                    <button type="submit" class="btn btn-custom mt-3">Subir</button>
                </form>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success mt-3">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-bordered mt-3">
                        <thead>
                            <tr class="texto">
                                <th>PDF</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pdfs as $pdf)
                                <tr>
                                    <td><a href="{{ asset('storage/pdfs/' . $pdf->filename) }}" target="_blank">{{ $pdf->filename }}</a></td>
                                    <td>
                                        <form action="{{ route('pdfs.destroy', $pdf->id) }}" method="POST">
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

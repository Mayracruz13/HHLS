@extends('layouts.app1')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Dashboard</title>


<body>
   
        <div class="container mt-3">
            <div class="d-flex justify-content-end">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-nav mr-2">Cerrar Sesión</button>
                </form>
            </div>
            <!-- Imagen -->
            <div class="text-center mt-3">
                <img src="img/Color.webp" class="img-fluid" alt="Responsive Image">
            </div>
        </div>

       
@endsection

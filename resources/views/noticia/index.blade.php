<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Google News</title>
</head>

<body class="bg-white">
    <nav class="navbar navbar-light bg-white d-flex py-3 px-5 shadow p-3 mb-5">
    
        <a href="{{ url('/noticia/') }}">Google Noticias</a>

        
        <div class="rounded input-group-prepend">
            <input type="text" name="Buscar" placeholder="Buscar temas, ubicaciones y fuentes" id="Buscar" class="rounded bg-light form-control"/>
        </div>

        <a href="{{ url('/noticia/create') }}">Agregar Noticia</a>
        
    </nav>

    <div class="alert alert-success alert-dismissible" role="alert">
        
        @if(Session::has('mensaje'))
        {{ Session::get('mensaje') }}
        @endif

    </div>
    
    
    <div class="container">
        @foreach ($noticias as $noticia)
        
        
        <div class="border rounded mb-3 p-3 bg-white">

        <div class="d-flex bd-highlight">

            <div  class="p-2 w-100 bd-highlight">
                <h4>{{ $noticia->Titulo }}</h4>

                <li>
                    {{ $noticia->Descripcion }}
                </li>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{ $noticia->Foto }}"class="rounded flex-shrink-1 bd-highlight" width="100"><br>
                </div>
            </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
           
        <a class="btn btn-primary" href="{{ url('/noticia/'.$noticia->id.'/edit') }}">Editar</a>
    
            <form action="{{ url('/noticia/'.$noticia->id) }}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('Seguro que deseas borrar la noticia?')" value="Borrar" class="btn btn-danger">
            </form>

        </div>

    
        </div>
        @endforeach
    </div>  
    
</body>
</html>


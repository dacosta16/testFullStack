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

<body>
    <nav class="navbar navbar-light bg-white d-flex py-3 px-5 shadow p-3 mb-5">
    
        <a href="{{ url('/noticia/') }}">Google Noticias</a>

        
        <div class="rounded input-group-prepend">
            <input type="text" name="Buscar" placeholder="Buscar temas, ubicaciones y fuentes" id="Buscar" class="rounded bg-light form-control"/>
        </div>

        <a href="{{ url('/noticia/create') }}">Agregar Noticia</a>
        
    </nav>
        
    
    @if(Session::has('mensaje'))
    {{ Session::get('mensaje') }}
    @endif
    
    <div class="container">
        @foreach ($noticias as $noticia)
        <div class="border rounded mb-3 p-3">
            <h2>{{ $noticia->Titulo }}</h2>
            <h3>{{ $noticia->Descripcion }}</h3>

            <div class="media">
                <img src="{{ $noticia->Foto }}" alt="" class="float-right">
            </div>

            <a href="{{ url('/noticia/'.$noticia->id.'/edit') }}">Editar</a>
    
            <form action="{{ url('/noticia/'.$noticia->id) }}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('Seguro que deseas borrar la noticia?')" value="Borrar">
            </form>
    
        </div>
        @endforeach
    </div>  
    
</body>
</html>


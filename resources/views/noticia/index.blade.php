<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src=" {{ asset('js/app.js') }} "></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

    <title>Google News</title>
</head>

<body class="bg-white">


    <nav class="navbar navbar-light bg-white py-3 px-5 shadow p-3 mb-5">
        
        <div class="input-group-prepend">
            @include('sidebar')
            <a class="enlace" href="{{ url('/noticia/') }}"><i class="fab fa-google "></i>oogle Noticias</a>
        </div>
        
        <div class="input-group-prepend">
            <input type="search" id="form1" class="form-control" placeholder="Buscar" />
        </select>
    </div>
    
    <a title="Añadir Nueva Noticia" class="enlace" href="{{ url('/noticia/create') }}"><i class="fas fa-plus-circle"></i></i></a>
    
    </nav>

        
          
    <div class="contenedor">
    
    <div class="text-center">
        @if(Session::has('mensaje'))
        {{ Session::get('mensaje') }}
        @endif <br><br>
    </div>

        <h4 class="float-start">Titulares</h4>
        <h5 class="float-end"> <a href="https://news.google.com/topics/CAAqLAgKIiZDQkFTRmdvSUwyMHZNRFZxYUdjU0JtVnpMVFF4T1JvQ1ZWTW9BQVAB?hl=es-419&gl=US&ceid=US%3Aes-419" style="color:#0097FF" > Mas Titulares</a></h5> <br>

        <a href="https://news.google.com/topics/CAAqBwgKMNDolwsw7ZGvAw?hl=es-419&gl=US&ceid=US%3Aes-419">
            <div class="border rounded mt-5 p-3">
                <h6 class=""> <span style="color:#0097FF">Noticias sobre el COVID-19:</span> Mira la cobertura mas reciente sobre el coronavirus</h6>
            </div>
        </a>

        @foreach ($noticias as $noticia)
        
        <div class="border rounded mt-5 mb-3 p-3 bg-white">

        <div class="d-flex bd-highlight">

            <div  class="texto-noticias p-2 w-100 bd-highlight">

                <h4>{{ $noticia->Titulo }}</h4>

                <li>
                    {{ $noticia->Descripcion }}
                </li>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <img src="{{ $noticia->Foto }}"class="rounded flex-shrink-1 bd-highlight" width="100"><br>
                </div>
            </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
           
        <a title="Editar Noticia" class="btn btn-outline-primary" href="{{ url('/noticia/'.$noticia->id.'/edit') }}"><i class="far fa-edit"></i></a>
    
            <form action="{{ url('/noticia/'.$noticia->id) }}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <button title="Borrar Noticia" type="submit" onclick="return confirm('Seguro que deseas borrar la noticia?')" value="Borrar" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
            </form>

        </div>
        
    </div>
    @endforeach
</div>




</body>
</html>


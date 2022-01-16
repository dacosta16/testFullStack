@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}

@endif

<a href="{{ url('/noticia/') }}">Google Noticias</a>
<a href="{{ url('/noticia/create') }}">Agregar Noticia</a>
<div class="container">
    @foreach ($noticias as $noticia)
    <div>
        <h2>{{ $noticia->Titulo }}</h2>
        <h3>{{ $noticia->Descripcion }}</h3>
        <img src="{{ $noticia->Foto }}" alt="">

        <a href="{{ url('/noticia/'.$noticia->id.'/edit') }}">Editar</a>

        <form action="{{ url('/noticia/'.$noticia->id) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('Seguro que deseas borrar la noticia?')" value="Borrar">
        </form>

    </div>
    @endforeach
</div>  
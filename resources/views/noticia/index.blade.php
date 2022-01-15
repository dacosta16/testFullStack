Vista de Todas las noticias

<div class="container">
    @foreach ($noticias as $noticia)
    <div>
        <h2>{{ $noticia->Titulo }}</h2>
        <h3>{{ $noticia->Descripcion }}</h3>
        <h3>{{ $noticia->Foto }}</h3>
        <h3>Editar || Borrar</h3>

        <form action="{{ url('/noticia/'.$noticia->id) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('Seguro que deseas borrar la noticia?')" value="Borrar">
        </form>

    </div>
    @endforeach
</div>  
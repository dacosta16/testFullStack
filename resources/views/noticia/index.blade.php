Vista de Todas las noticias

<div class="container">
    @foreach ($noticias as $noticia)
    <div>
        <h2>{{ $noticia->Titulo }}</h2>
        <h3>{{ $noticia->Descripcion }}</h3>
        <h3>{{ $noticia->Foto }}</h3>
        <h3>Editar || Borrar</h3>
    </div>
    @endforeach
</div>  
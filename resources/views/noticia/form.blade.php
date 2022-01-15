Formulario de creacion y edicion de noticias

<form action=" {{ url('/noticia') }} " method="post" enctype="multipart/form-data">
@csrf
    
    <label for="Titulo">Titulo de la Noticia</label>
    <input type="text" name='Titulo' id='Titulo'>
    <br>

    <label for="Descripcion">Descripcion de la Noticia</label>
    <input type="text" name='Descripcion' id='Descripcion'>
    <br>

    <label for="Foto">Url de la Noticia</label>
    <input type="text" name='Foto' id='Foto'>
    <br>

    <input type="submit" value='Guardar Noticia'>

    
</form>
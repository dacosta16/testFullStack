    <label for="Titulo">Titulo de la Noticia</label>
    <input type="text" name='Titulo' id='Titulo' value="{{ isset($noticia->Titulo)?$noticia->Titulo:'' }}">
    <br>

    <label for="Descripcion">Descripcion de la Noticia</label>
    <input type="text" name='Descripcion' id='Descripcion' value="{{ isset($noticia->Descripcion)?$noticia->Descripcion:'' }}">
    <br>

    <label for="Foto">Foto de la Noticia</label>
    <input type="text" name='Foto' id='Foto' value="{{ isset($noticia->Foto)?$noticia->Foto:'' }}">
    <br>

    <input type="submit" value='Guardar Noticia'>

    <a href="{{ url('/noticia/') }}">Regresar</a>
    <br>
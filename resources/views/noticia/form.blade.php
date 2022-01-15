    <label for="Titulo">Titulo de la Noticia</label>
    <input type="text" name='Titulo' id='Titulo' value="{{$noticia->Titulo}}">
    <br>

    <label for="Descripcion">Descripcion de la Noticia</label>
    <input type="text" name='Descripcion' id='Descripcion' value="{{$noticia->Descripcion}}">
    <br>

    <label for="Foto">Url de la Noticia</label>
    <input type="text" name='Foto' id='Foto' value="{{$noticia->Foto}}">
    <br>

    <input type="submit" value='Guardar Noticia'>
    <br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
    <div class="form-group container border p-3 mt-3 bg-white">
        <h1 class="text-center">{{$modo}} Noticia</h1>
        
            @if(count($errors)>0)
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{$error}} </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        
            <label for="Titulo">Titulo de la Noticia</label>
            <input class="form-control" type="text" name='Titulo' id='Titulo' 
            value="{{ isset($noticia->Titulo)?$noticia->Titulo:old('Titulo') }}">
            <br>
        
            <label for="Descripcion">Descripcion de la Noticia</label>
            <input class="form-control" type="text" name='Descripcion' id='Descripcion' 
            value="{{ isset($noticia->Descripcion)?$noticia->Descripcion:old('Descripcion') }}">
            <br>
        
            <label for="Foto">Foto de la Noticia</label>
            <input class="form-control" type="text" name='Foto' id='Foto' 
            value="{{ isset($noticia->Foto)?$noticia->Foto:old('Foto') }}">
            <br>
        
            <input class="btn btn-primary" type="submit" value='{{$modo}} Noticia'>
        
            <a class="btn btn-primary" href="{{ url('/noticia/') }}">Regresar</a>
            <br>
    </div>

</body>
</html>

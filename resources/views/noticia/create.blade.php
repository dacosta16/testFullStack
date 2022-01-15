

<form action=" {{ url('/noticia') }} " method="post">

    @csrf
    @include('noticia.form', ['modo'=>'Crear'])


</form>
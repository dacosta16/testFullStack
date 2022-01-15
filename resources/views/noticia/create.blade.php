

<form action=" {{ url('/noticia') }} " method="post">

    @csrf
    @include('noticia.form')


</form>
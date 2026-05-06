@extends('layouts/main_layout')
@section('content')

<h1>Usando php com tag curta: <?= $name ?> </h1>
<h1>Usando php com tag normal: <br> <?php echo $name ?> </h1>
<h1>Usando diretiva blade duplo mustache <br> {{ $name }}</h1>
<h3> {{ $phone }}</h3>

@endsection
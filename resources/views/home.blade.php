@extends('layouts/main_layout')
@section('content')

{{-- empty --}}
@empty($value)
    <p>Não existe</p>
@else
    <p>Existe</p>
@endempty

{{-- isset --}}
@isset($value)
    <p>EXISTE a variável</p>
@else
    <p>Não existe a variável</p>
@endisset

{{-- unless - a menos que --}}
@unless($value != 100)
    <p>OK !!!!!!</p>
@endunless

@endsection

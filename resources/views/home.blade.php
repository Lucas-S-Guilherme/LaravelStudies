@extends('layouts/main_layout')
@section('content')

{{-- Intrução IF simples --}}
@if($value == 100)
    <h1>Primeira Parte do Código</h1>
@endif

{{-- Instrução IF ELSE --}}
@if($value != 100)
    <h1>Primeira Parte do Código</h1>
@else
    <h1>Segunda Parte do Código</h1>
@endif

{{-- instrução IF ELSEIF ELSE ENDIF --}}

@if($value < 10)
    <p>Primeiro</p>
@elseif($value < 20)
    <p>Segundo</p>
@elseif($value > 50)
    <p>Terceiro</p>
@elseif($value == 100)
    <p>Quarto</p>
@else
    <p>Outro Caso</p>
@endif

@endsection


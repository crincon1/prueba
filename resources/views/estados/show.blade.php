@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Estado: {{$estado->estados}}</h1>
    <a name="" href="{{route('estados.edit', $estado->id)}}" id="" class="btn btn-primary" role="button">Editar</a>
    
</div>
@endsection
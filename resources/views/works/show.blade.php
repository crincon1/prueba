@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tarea: {{$work->name}}</h1>
    <p><b>Fecha:</b> {{$work->date}}</p>
    <p><b>Estado:</b> {{$work->estados->estados}}</p>
    <a name="" href="{{route('works.edit', $work->id)}}" id="" class="btn btn-primary" role="button">Editar</a>
    
</div>
@endsection
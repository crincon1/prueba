@extends('layouts.app')

@section('content')
<div class="container">
    <a name="" id="" class="btn btn-primary" href="{{route('works.create')}}" role="button">Crear Tarea </a>
    <div class="table-responsive">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($works as $work)
                   <tr class="">
                    <td scope="row">{{$work->id}}</td>{{-- interpolacion --}}
                    <td>{{$work->name}}</td>
                    <td>{{$work->date}}</td>
                    <td>{{$work->estados->estados}}</td>
                    <td><div class="btn-group" role="group" aria-label="Button group name">
                        <a href="{{route('works.show', $work->id)}}"><button type="button" class="btn btn-success">Editar</button></a>
                        <form action="{{route('works.destroy', $work->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div></td>
                </tr> 
                @endforeach
            </tbody>
        </table>
    </div>
    
</div>
@endsection

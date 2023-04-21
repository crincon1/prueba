@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('works.update',$work->id)}}" method="POST">
            @csrf  
            @method('PUT') 
            <div class="mb-3 mt-3">
              <label for="text" class="form-label">Tarea:</label>
              <input type="text" class="form-control" id="text" placeholder="Ingresar nuevo estado" name="name" value="{{$work->name}}">
            </div>
            <div class="mb-3 mt-3">
              <label for="text" class="form-label">Fecha:</label>
              <input type="text" class="form-control" id="text" placeholder="Ingresar nuevo estado" name="date" value="{{$work->date}}">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Estados</label>
              <select class="form-select form-select-lg" name="id_estados" id="">
                <option value="{{$work->id_estados}}" selected>{{$work->estados->estados}}</option>
                @foreach ($estados as $estado)
                  <option value="{{$estado->id}}">{{$estado->estados}}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection
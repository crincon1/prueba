@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('works.store')}}" method="POST">
            @csrf   
            <div class="mb-3 mt-3">
              <label for="text" class="form-label">Tarea</label>
              <input type="text" class="form-control" id="text" placeholder="Ingresar nuevo estado" name="name">
            </div>
            <div class="mb-3 mt-3">
              <label for="text" class="form-label">Fecha</label>
              <input type="date" class="form-control" id="text" placeholder="Ingresar nuevo estado" name="date">
            </div>
            <div class="mb-3 mt-3">
              <label for="" class="form-label">Estado</label>
              <select class="form-select form-select-lg" name="id_estados" id="">
                <option value="null" selected>Seleccione un estado</option>
                @foreach ($estados as $estado)
                <option value="{{$estado->id}}">{{$estado->estados}}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection
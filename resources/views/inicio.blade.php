@extends('index')
@section('cuerpo')
    <h1>Esta es la pagina principal con una tabla</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($notas as $nota)
            <tr>
            <th scope="row">{{$nota->id}}</th>
            <td>{{$nota->nombre}}</td>
            <td>{{$nota->descripcion}}</td>
              <td>@mdo</td>
            </tr>
          @endforeach
          
        </tbody>
      </table>
@endsection
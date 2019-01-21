@extends('inicio')
@section('cuerpo')
    <h1>Este es nuestro equipo de trabajo</h1>
    <div class="row">
      <div class="col-2">
        @foreach ($equipo as $item)
        <a href="{{route('nosotros',$item)}}" class="h4 text-danger">{{$item}}</a><br>       
        @endforeach
      </div>
      <div class="col-10">
        @if (!empty($nombre))
        @switch($nombre)
            @case($nombre == 'Ignacio')
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">{{$nombre}}</h5>
                <p class="card-text">{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque consequuntur sunt voluptatum aut similique numquam perferendis? Natus odio ut laborum fugit fuga. Mollitia labore adipisci, nostrum assumenda cumque porro? Blanditiis?</p>
                <a href="{{route('nosotros')}}" class="card-link">Cancelar</a>
                </div>
              </div>                
                @break
            @case($nombre == 'Pedrito')
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">{{$nombre}}</h5>
                <p class="card-text">{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque consequuntur sunt voluptatum aut similique numquam perferendis? Natus odio ut laborum fugit fuga. Mollitia labore adipisci, nostrum assumenda cumque porro? Blanditiis?</p>
                  <a href="{{route('nosotros')}}" class="card-link">Cancelar</a>
                </div>
              </div>                
                @break
            @case($nombre == 'Juanito')
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">{{$nombre}}</h5>
                <p class="card-text">{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque consequuntur sunt voluptatum aut similique numquam perferendis? Natus odio ut laborum fugit fuga. Mollitia labore adipisci, nostrum assumenda cumque porro? Blanditiis?</p>
                  <a href="{{route('nosotros')}}" class="card-link">Cancelar</a>
                </div>
              </div>                            
                @break
                
          @endswitch
        @endif
      </div>
    </div>
@endsection
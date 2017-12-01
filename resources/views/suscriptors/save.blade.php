@extends('layouts.app')
@section('content')
 <div class="container">
    <h1> Buscas a alguien? </h1>
    {!! Form::open(array('url' => 'suscriptors/' . $suscripcion->id, 'method' => $method)) !!}
      @foreach ($usuarios as $usuario)
             <tr>
                <td> {{ $usuario->name, ['class' => 'btn btn-primary btn-xs'] }} </td>
                <td>
                   {!! link_to('newsuscripcion/'.$usuario->id , 'Suscribirse!', ['class' => 'btn btn-primary btn-xs']) !!} <br>
                </td>
             </tr>
          @endforeach
    {!! Form::close() !!}
 </div>
@endsection
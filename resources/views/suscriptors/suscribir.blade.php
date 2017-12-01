@extends('layouts.app')
@section('content')
 <div class="container">
    <h1> Buscas alguien en especial? </h1>
    <table class="table">
       <thead>
       <tr>
             <th style="width: 35%"> Personas </th>
             <th style="width: 10%"> </th>
             <th style="width: 10%"> </th>
             <th style="width: 10%"> </th>
          </tr>
       </thead>
       <tbody>
          @foreach ($usuarios as $usuario)
             <tr>
                <td> {{ $usuario->name }} </td>
                 {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}                 
              </tr>
          @endforeach
       </tbody>
    </table>
 </div>
@endsection
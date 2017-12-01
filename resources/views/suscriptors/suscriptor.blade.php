@extends('layouts.app')
 @section('content')
 <div class="container">
    @if(Session::has('notice'))
       <div class="alert alert-success">
          {{ Session::get('notice') }}
       </div>
    @endif
    <h1> Lista de suscriptores </h1>
    
    <table class="table">
       <thead>
       <tr>
             <th style="width: 35%"> Suscriptores a tu perfil </th>
             <th style="width: 10%"> </th>
             <th style="width: 10%"> </th>
             <th style="width: 10%"> </th>
          </tr>
       </thead>
       <tbody>
          @foreach ($suscriptors as $suscriptor)
             <tr>
                <td> {{ $suscriptor->name }} </td>
                
                <td>
                   {!! Form::open(array('url' => 'suscriptors/' . $suscriptor->id, 'method' => 'DELETE')) !!}
                      {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                   {!! Form::close() !!}
                </td>
             </tr>
          @endforeach
       </tbody>
    </table>
 </div>
 @endsection
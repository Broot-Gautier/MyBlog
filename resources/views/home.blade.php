@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="row">
                    <div class="col-lg-12">
                        {!! link_to('suscriptors/store', 'suscribete!', ['class' => 'btn btn-primary pull-right']) !!}
                    </div>
                    <div class="col-lg-12">
                        {!! link_to('suscriptores/'.$user_id , 'suscritos a tu cuenta', ['class' => 'btn btn-primary pull-left']) !!}
                    </div>
               </div>
                <div class="panel-heading">Dashboard <br>
                    Your posts <br>
                    @foreach ($posts as $post)
                         <tr>
                            <td> {{ $post->titulo }} </td>
                            <td>
                               {{ $post->descripcion }}
                            </td>
                            <td>
                               {!! link_to('posts/'.$post->id.'/edit', 'Editar', ['class' => 'btn btn-primary btn-xs']) !!}
                            </td>
                            <td>
                               {!! Form::open(array('url' => 'posts/' . $post->id, 'method' => 'DELETE')) !!}
                                  {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs']) !!}
                               {!! Form::close() !!}
                            </td>
                         </tr>
                    @endforeach
                </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

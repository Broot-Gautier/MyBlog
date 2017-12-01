<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\User;
use App\Suscriptor;
use Illuminate\Support\Facades\Redirect;

class SuscriptorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //$suscriptors = User::find(Suscriptor::where('user_id','=', (string) Auth::id()->id ));
        $suscriptors = User::all();
        return View('suscriptors.index')->with('suscriptores', $suscriptors);
    }

    public function suscritos()
    {
        $suscritos = Suscriptor::where('user_id','=',1);
        return View('suscriptors.suscriptores')->with('suscritos',$suscritos);
    }

    public function store()
    {
        //
    }

    public function destroy($id)
    {
         $suscriptor = Suscriptor::where(array(
            'suscriptor_id' => $id,
            'user_id' => Auth::id()
        ))->first();
        $suscriptor->delete();
    }
       public function show($id)
    {
       $usuarios = User::all();
        $suscripcion = new Suscriptor();
        return  View('suscriptors.save')->with('usuarios',$usuarios)->with('suscripcion',$suscripcion)->with('method','POST');
    }
}

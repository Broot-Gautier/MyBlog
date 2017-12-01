<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Use App\User;
Use App\Suscriptor;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about',function(){
	$name = 'BRoot';
	$tasks = [
		'Go LP',
		'Tarea Algoritmos',
		'Llamar a mamá',
		'Llamar a papá'
	];

	return view('about',['name' => $name,'tasks' => $tasks]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//**Definimos que solo puede ver posts un usario autentificado**//
Route::group( ['middleware'=>'auth'],function()
{
	Route::resource('/posts','PostsController');
});
Route::group( ['middleware'=>'auth'],function()
{
	Route::resource('/suscriptors','SuscriptorsController');

});

Route::get('/action_page/{input}', function($input)
{
	echo 'Tienes razon: ' .$input;
});

Route::get('/vamos','SuscriptorsController@index');

Route::get('/newsuscripcion/{aseguir}',function($aseguir)
{
	$suscripcion = new Suscriptor();
	$suscripcion->user_id=$aseguir;
	$suscripcion->suscriptor_id=Auth::id();
	$suscripcion->save();
	return View('suscriptors.save')->with('usuarios',User::all())->with('suscripcion',$suscripcion)->with('method','POST');
	//return View('suscriptors.store')->with('suscriptores',User::all());
});
Route::get('suscriptores/{id}',function($id)
{
	//$misuscritos = App\Suscriptor::where('user_id',$id);
	$misuscritos2 = App\Suscriptor::where('user_id',$id)->select('suscriptor_id');
	$vector = $misuscritos2->get();

	//echo $vector[0]->suscriptor_id;
	//echo $vector[1]->suscriptor_id;
	$suscritos = [];
	$contador = 0;
	//echo $suscritos[0];
	foreach ($vector as $vec) {
		$suscritos[$contador] = User::find($vec->suscriptor_id)->name;
		echo $suscritos[$contador];
		$contador += 1;
		echo ' ';
	}
	
	return View('suscriptors.suscriptores')->with('suscritos',$suscritos);
});
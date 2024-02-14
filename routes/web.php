<?php

use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/info/{tipo?}', function ($tipo= null) {
    
    $otra ='algo'; 

    return view('informacion', compact('tipo','otra')); 
    //return view('informacion', [tipo => $tipo]);  
    //return view('informacion') =>with('tipo',$tipo)=>with('otra',$otra);
});

Route::get('/contacto', function () {
    return view('contacto'); 
});

Route::post('/contacto-guarda', function(Request $request){
    //dd($request->all(),$request->nombre, $request -> input('nombre'));
    
    //$nombre= _POST['nombre'];
    //return"Si llegue a la ruta";
    //recibir datos

    //validar

    //guardar
    $comentario = new Comentario(); 
    $comentario->nombre = $request->nombre;
    $comentario->correo = $request->correo;
    $comentario->comentario = $request->comentario;
    $comentario->ciudad = $request->ciudad;
    $comentario->save();

    //redireccionar
    return redirect()->back();
});


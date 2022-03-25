<?php

use App\Http\Controllers\miprimerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\heladosController;
use App\Http\Controllers\ControladorPrecios;
use App\Http\Controllers\cursoController;
use App\Http\Controllers\DocenteController;

//asi se llama una ruta

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

Route::get('/', function () {
    return view('welcome');
});
/*
lo primero es nombrar la ruta entre comilla simple
con el nombre que desee darle. Luego va la coma, seguido de la funcion y el return
*/
Route::get('/miprimeraruta', function(){
    return 'Estoy aprendiendo Laravel, Esta es mi primera ruta';
}
);

/*
los parametros son muy importantes en las rutas de las paginas web y
los indicamos entre llaves{}. los parametros van de la misma ruta
*/

Route::get('/minombre/{nombre}', function($nombre){
    return'Hola soy ' .  $nombre;
});

Route::get('/suma/{num1}/{num2}', function ($num1, $num2) {
    return'La suma es ' .$num1+$num2;
});

Route::get('sumanumeros/{a}/{b}', [miprimerController::class,'suma']);

Route::get('caremonda/{comoseledelagana}', [miprimerController::class,'carrera']);

//7. la clase va igual que el metodo entre corchete o parantesis cuadrado la clase va acompañada de :: clas, y el metodo tiene que llamarse igual a como esta en la clase y entre comilla simple

Route::get('heladeria/{opcion}', [heladosController::class,  'helado']);

Route::get('precio/{producto}', [ControladorPrecios::class, 'tienda']);

Route::get('iva/{Articulo}/{precio}',[ControladorPrecios::class, 'IVA']);

//

Route::resource('cursos', cursoController::class);
Route::resource('docentes', DocenteController::class);
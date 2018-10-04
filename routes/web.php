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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inicio', function () {
  return view('inicio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
Route::get('/alumno/listado', 'AlumnoController@index');
Route::get('/alumno/create', 'AlumnoController@create');
Route::get('/alumno/store', 'AlumnoController@store');
Route::get('/alumno/show/{alumno}', 'AlumnoController@show');
Route::get('/alumno/edit/{alumno}', 'AlumnoController@edit');
Route::get('/alumno/update', 'AlumnoController@update');
*/
Route::resource('alumno', 'AlumnoController')->parameters( ['alumno' => 'alumnum'] );

/*
Route::get('/alumnos', 'AlumnoController@index');

Route::get('/alumno/create', function(){
  return view('alumnos.formAlumnos');
});

Route::post('/alumno/store', function(){
  //validar info
  //insertar a base de datos
  //redireccionar
});

Route::get('/alumno/show/{id?}', function($id = 0){
  dd($id);
  return view('alumnos.showAlumno', compact('id'));
    //->with(['id' => $id, 'nombre' => "Prog-para internet"]);
});

Route::get('/alumno/edit/{id}', function($id){
  return view('alumnos.formEditAlumno', compact('id'));
});

Route::post('/alumno/update', function(){
  //validar info
  //$alumno = $_POST['alumno'];
  //actualizar base de datos
  //redireccionar /alumno/show/$id
});

Route::get('/alumno/listado', function(){
  
});
*/
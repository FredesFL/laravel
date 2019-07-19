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

Route::get("/miPrimeraRuta", function(){
    return "Cree mi primera ruta en Laravel";
});

Route::get("esPar/{numero}", function($numero){
  if ($numero % 2 == 0) {
    return "El número $numero es par";
  }
  return "El número $numero es impar";
});

Route::get("/sumar/{num1}/{num2}/{num3?}", function ($num1, $num2, $num3 =null){
  $suma=$num1+$num2+$num3;
  return $suma;
});

// Ejercitactión Blade
Route::get("/peliculas/{array}", function () )

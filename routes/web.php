<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

Route::get('/', function(){
    return view('welcome');
});

/* Route::get('/', function(){
    return view('auth.login');
}); */

//Route , PathController@method
//Route::get('/', 'App\Http\Controllers\CommenceController@index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('/animal','App\Http\Controllers\AnimalController');

//Ejemplos

// parametros por default
Route::get('/player/{team}', function($team='Multipurpose'){
    return 'The Player of: '.$team.' is in Vacations';
})->where('player','[A-Za-z]+');

// parametros concreto
Route::get('/player/{name}', function($name){
    return 'The Player: '.$name.' is in Vacations';
})->where('player','[A-Za-z]+');

// enrutamiento dinamico
Route::get('/route_one', function(){
    return 'This is a the Main-Route';
})->where('Route-1');

Route::get('/route_two', function(){
    return 'This is a the Fork-Route of the Main-Route';
    return redirect()->route('Route-1');
});

// uso de fachadas
if (View::exists('player')){
    Route::get('/player', function () {
        return view('player');
    })->name('player');
}else{
    Route::get('/replayer', function () {
        return 'The view do not exits';
    });
}

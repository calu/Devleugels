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

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function() {
    if (Auth::guest()) abort(403); 
    if (Auth::user()->admin == 0) {
        /**
         $client = Auth::user()->client()->first();        
         return redirect()->action('ClientController@show',['id' => $client->id]);   
         **/
        return view('home');
    } else
       return view('adminhome');
});

// Intake resource
Route::get('intakes/{id}/destroy', 'IntakeController@destroy');
Route::resource('intakes', 'IntakeController');

// Mutuality resource
Route::get('mutualities/{id}/destroy', 'MutualityController@destroy');
Route::resource('mutualities', 'MutualityController');

// Client
Route::get('clients/{id}/createwithid', 'ClientController@createWithId');
Route::resource('clients', 'ClientController');

// Services
Route::resource('services', 'ServiceController');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

//Laravel 5x way
//Route::resource('contacts', 'ContactController');

Route::get('/contacts', [ContactController::class, 'index']);
Route::get('/contacts/create', [ContactController::class, 'create']);

Route::post('/contacts', [ContactController::class, 'store']);
//Route::get('/contacts/store', [ContactController::class, 'store']);  //??

Route::get('/contacts/{id}', [ContactController::class, 'show']);
Route::get('/contacts/{id}/edit', [ContactController::class, 'edit']);


Route::patch('/contacts/{id}', [ContactController::class, 'update']);
Route::delete('/contacts/{id}', [ContactController::class, 'destroy']);


/*
    //or RESTful api here
    Route::apiResource('contacts', 'ContactController');
*/

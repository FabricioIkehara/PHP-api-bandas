<?php

use App\Http\Controllers\BandController;
use App\Http\Controllers\HelloWorldController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// route::get('hello/{name}', function($name){
//     return 'hello '.$name;
// });

// route::post('hello-post/{name}', 'HelloWorldController@hello');

Route::get('bands', [BandController::class, 'getAll']);

Route::post('bands/store', [BandController::class, 'store']);

Route::get('bands/{id}', [BandController::class, 'getById']);

Route::get('bands/gender/{gender}', [BandController::class,'getBandsByGender']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

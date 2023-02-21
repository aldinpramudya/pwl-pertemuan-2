<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

///Pratikum 1 Routing Web Framework Laravel
Route::get('/articles/{id}', function($id){
    return 'Halaman artikel dengan id '. $id . ' king ';
});

Route::get('/artikel/{id}', function($id){
    return view('articles', ['id' => $id]);
});

//Pratikum 2 Controller Web 
Route::get('/', [PageController::class,'index']);

Route::get('/about', [PageController::class,'about']);

Route::get('/articles/{id}', [PageController::class,'articles']);

//Pratikum 3 Desain Routing Web






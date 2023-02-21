<?php
// use App\Http\Controllers\PageController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use PhpParser\Node\Stmt\Return_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|`
*/

Route::get('/', function () {
    return view('welcome');
});

///Pratikum 1 Routing Web Framework Laravel
Route::get('/articles/{id}', function($id){
    return 'Halaman artikel dengan id '. $id;
});

Route::get('/artikel/{id}', function($id){
    return view('articles', ['id' => $id]);
});

//Pratikum 2 Controller Web 
Route::get('/', [HomeController::class,'index']);

Route::get('/about', [AboutController::class,'about']);

Route::get('/articles/{id}', [ArticleController::class,'articles']);

//Pratikum 3 Desain Routing Web

Route::get('/home',function(){
    return view('company.first');
});

Route::prefix('category')->group(function(){
    Route::get('/marbel-edu-games', function(){
        return '<center>Ini Adalah Halaman untuk marbel edu games<center>';
    });

    Route::get('/marbel-and-friends-kids-games', function(){
        return '<center>Ini Adalah Halaman untuk halaman marbel and friends kids <center>';
    });

    Route::get('/riri-story-books', function(){
        return '<center>Ini Adalah Halaman untuk halaman riri story kids<center>';
    });

    Route::get('/kolak-kids-songs', function(){
        return '<center>Ini adalah Halaman untuk halaman kolak kids songs<center>';
    });
});

Route::get('/news', function(){
    return 'News';
});

Route::get('/news/{name?}', function($name = ""){
    return view('daftarBerita', ['name' => $name]);
});

Route::prefix('program')->group(function(){
    Route::get('/karir', function(){
        return '<center>Ini adalah halaman untuk karir<center>';
    });
    Route::get('/magang', function(){
        return '<center>Ini adalah halaman magang<center>';
    });
    Route::get('/kunjungan-industri', function(){
        return '<center>Ini adalah halaman kunjungan industri<center>';
    });
});

Route::get('/about-us', function(){
    return 'Ini adalah halaman about us';
});

Route::resource('contact-us', ContactController::class);









<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Nama : Aldin Ariel Pramudya '. '<br>NIM : 2141720233';
    }

    public function articles($id){
        return view('articles', ['id' => $id]);
    }
}

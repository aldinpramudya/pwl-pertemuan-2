<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return 'Nama : Aldin Ariel Pramudya '. '<br>NIM : 2141720233';
    }
}

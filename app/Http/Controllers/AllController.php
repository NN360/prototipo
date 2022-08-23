<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllController extends Controller
{
    public function index(){
        return view('index');
    }

    public function nosotros(){
        return view('nosotros');
    }

    public function galeria(){
        return view('galeria');
    }

    public function mapa(){
        return view('mapa');
    }

}

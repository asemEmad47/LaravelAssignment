<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function LoadEnIndex(){
        session(['from_arabic' => false]);
        return view('indexEn');
    }
    public function LoadArIndex(){
        session(['from_arabic' => true]);
        return view('indexAr');
    }
}

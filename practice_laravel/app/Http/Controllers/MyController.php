<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    // method view beranda
    public function index() {
        return view('template.beranda');
    }

    // method view about
    public function about(){
        return view('template.about');
    }
}

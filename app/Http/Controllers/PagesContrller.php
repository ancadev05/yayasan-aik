<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesContrller extends Controller
{
    public function about(){
        return view('pages.about');
    }
    public function donatur(){
        return view('pages.donatur');
    }

    public function programShow(){
        return view('pages.program-show');
    }
}

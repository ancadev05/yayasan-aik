<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesContrller extends Controller
{
    public function donatur(){
        return view('pages.donatur');
    }
}

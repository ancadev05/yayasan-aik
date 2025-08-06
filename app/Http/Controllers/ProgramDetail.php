<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramDetail extends Controller
{
    public function ambulanceGratis()
    {
        return view('program.detail.ambulance-gratis');
    }
}

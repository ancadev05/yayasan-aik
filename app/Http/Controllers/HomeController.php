<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $programs = Program::all();
        return view('welcome', compact('programs'));
    }
}

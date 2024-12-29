<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class PagesContrller extends Controller
{
    public function about(){
        return view('pages.about');
    }
    public function donatur(){
        return view('pages.donatur');
    }
    public function galery(){
        return view('pages.galery');
    }

    public function daftarProgram(){
        $programs = Program::all();
        return view('pages.daftar-program', compact('programs'));
    }

    public function programShow($slug){
        // dd($slug);
        $program = Program::where('slug', $slug)->first();
        return view('pages.program-show', compact('program'));
    }
}

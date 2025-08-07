<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesDonasiController extends Controller
{
    public function gedungSantri()
    {
        $url = config('app.url') . '/gedung-santri';
        return view('pages.donasi.gedung-santri', compact('url'));
    }
}

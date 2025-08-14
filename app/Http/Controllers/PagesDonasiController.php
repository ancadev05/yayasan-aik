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

    public function pembebasanLahan()
    {
        $url = config('app.url') . '/pembebasan-lahan';
        return view('pages.donasi.lahan-pembangunan', compact('url'));
    }

    public function wakafQuran()
    {
        $url = config('app.url') . '/wakaf-qruan';
        return view('pages.donasi.wakaf-quran', compact('url'));
    }
}

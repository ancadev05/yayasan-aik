<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\Photo;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galerys = Galery::all();
        return view('galery.galery-index', compact('galerys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('galery.galery-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'gambar_galery.*' => 'file|image|mimes:jpg,jpeg,png,JPG,JPEG,PNG|max:2048' // validasi setiap foto
        ]);

        $galery = Galery::create([
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
        ]);

        // Proses unggah foto
        if ($request->hasFile('gambar-galery')) {
            foreach ($request->file('gambar-galery') as $file) {
                $filename = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/gambar-galery/', $filename);
                Photo::create([
                    'galery_id' => $galery->id,
                    'photo' => $filename
                ]);
            }
            // $file = $request->file('gambar-galery'); // mengambil file dari form
            // $file_name = date('ymdhis') . '.' . $file->getClientOriginalExtension(); // meriname file, antisipasi nama file double. memberi nama file dengan gabung extensi
            // $file->storeAs('public/gambar-galery/', $file_name); // memindahkan file ke folder public agar bisa diakses
        }

        return redirect('/galery');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

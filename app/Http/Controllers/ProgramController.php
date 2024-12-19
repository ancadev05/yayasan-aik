<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Program::all();
        return view('program.program-index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('program.program-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'gambar_program' => 'file|image|mimes:jpg,jpeg,png,JPG,JPEG,PNG|max:2048'
        ]);

        // generate foto
        $file_name = false;
        // Jika user upload gambar
        if ($request->hasFile('gambar-program')) {
            // Validasi gambar
            $file = $request->file('gambar-program'); // mengambil file dari form
            $file_name = date('ymdhis') . '.' . $file->getClientOriginalExtension(); // meriname file, antisipasi nama file double. memberi nama file dengan gabung extensi
            $file->storeAs('public/gambar-program/', $file_name); // memindahkan file ke folder public agar bisa diakses
        }

        $program = [
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'status' => 'status',
            'jenis' => 'jenis',
            'gambar_program' => $file_name,
        ];

        Program::create($program);

        return redirect('/program');
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

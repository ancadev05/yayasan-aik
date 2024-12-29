<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $program = Program::find($id);
        return view('program.program-edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'gambar_program' => 'file|image|mimes:jpg,jpeg,png,JPG,JPEG,PNG|max:2048'
        ]);

        // Validasi gambar baru
        if ($request->hasFile('gambar-program')) {
            // Validasi gambar
            $file = $request->file('gambar-program'); // mengambil file dari form
            $file_name = date('ymdhis') . '.' . $file->getClientOriginalExtension(); // meriname file, antisipasi nama file double. memberi nama file dengan gabung extensi
            $file->storeAs('public/gambar-program/', $file_name); // memindahkan file ke folder public agar bisa diakses
            // Hapus foto lama
            Storage::delete('public/gambar-program/' . $request->file_lama);
            // Masukkan namanya ke dalam database
            Program::where('id', $id)->update(['gambar_program' => $file_name]);
        } 

        $program = [
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'status' => 'status',
            'jenis' => 'jenis',
        ];

        Program::where('id', $id)->update($program);

        return redirect('/program');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $program = Program::find($id);
        Storage::delete('public/gambar-program/' . $program->gambar_program);
        $program->delete();
        return redirect('/program');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mahasiswas  = Mahasiswa::with('jurusan')->get();
        return view('mahasiswa.index',compact('mahasiswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $jurusans = Jurusan::all(); // manggil semua data jurusan di db
        return view('mahasiswa.create', compact('jurusans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            //Nama datang dari create.blade.php , name = nama
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswa',
            'jurusan_id' => 'required'
        ]);

        Mahasiswa::create($request->all()); //Ini Cara Simpannya

        return redirect()->route('mahasiswa.index')->with('success','Data Mahasiswa Berhasil Ditambahkan !');
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
    public function edit(Mahasiswa $mahasiswa)
    {
        //
        $jurusans = Jurusan::all();
        return view('mahasiswa.edit',compact('jurusans','mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
        $request->validate([
            //Nama datang dari create.blade.php , name = nama
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswa,nim,'.$mahasiswa->id,
            'jurusan_id' => 'required'
        ]);

        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')->with('success','Data Mahasiswa Berhasil Diperbarui !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success','Data Mahasiswa Berhasil Dihapus !');
    }
}

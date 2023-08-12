<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\Fakultas;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fakultas = Fakultas::all();

        return view('mahasiswa.create', compact('fakultas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa();

        $mahasiswa->nama_mahasiswa = $request->nama_mahasiswa;
        $mahasiswa->npm            = $request->npm;
        $mahasiswa->program_studi  = $request->program_studi;
        $mahasiswa->fakultas_id    = $request->fakultas_id;

        $mahasiswa->save();

        return redirect('mahasiswa')->with('success', 'Berhasil menambahkan data Mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fakultas = Fakultas::all();

        $mahasiswa = Mahasiswa::find($id);

        return view('mahasiswa.edit', compact('fakultas', 'mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);

        $mahasiswa->nama_mahasiswa = $request->nama_mahasiswa;
        $mahasiswa->npm            = $request->npm;
        $mahasiswa->program_studi  = $request->program_studi;
        $mahasiswa->fakultas_id    = $request->fakultas_id;

        $mahasiswa->save();

        return redirect('mahasiswa')->with('success','Berhasil melakukan update data ke database');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);

        $mahasiswa->delete();

        return redirect('mahasiswa')->with('success', 'Data berhasil dihapus');
    }
}

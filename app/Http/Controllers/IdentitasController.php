<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Identitas;

class IdentitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Identitas::all();
        return view('partial.identitas-pasien.identitas-pasien', compact(
            'data'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partial.tambah-data.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'kepala_keluarga' => 'required',
            'no_bpjs' => 'required',
        ]);

        Identitas::create($request->all());

        return redirect()->route('identitas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Identitas $identitas)
    {
        return view('partial.identitas.show', compact(
            'identitas'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Identitas $note)
    {
        return view('partial.identitas.edit', compact(
            'identitas'
        ));
        // return view('note.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Note $note)
    // {
    //     $request->validate([
    //         'status' => 'required',
    //         'judul' => 'required',
    //         'deskripsi' => 'required',
    //     ]);

    //     $note->update($request->all());

    //     return redirect()->route('note.index');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Note $note)
    // {
    //     $note->delete();

    //     return redirect()->route('note.index');
    // }
}

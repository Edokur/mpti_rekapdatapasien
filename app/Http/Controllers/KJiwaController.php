<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KJiwa;

class KJiwaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = KJiwa::all();
        return view('partial.kesehatan-jiwa.kesehatan-jiwa', compact(
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
        return view('partial.kesehatan-jiwa.create');
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
            'id_register'=>'required',
            'id_pasien'=>'required',
            'nama'=>'required',
            'nik'=>'required',
            'tanggal_lahir'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required',
            'no_bpjs'=>'required',
            'kepala_keluarga'=>'required',
            'pendidikan'=>'required',
            'pekerjaan'=>'required',
            'diagnosa'=>'required',
            'terapi'=>'required',
            'tanggal_kunjungan'=>'required',
            'kunjungan'=>'required',
            'keterangan'=>'required',
        ]);

        Note::create($request->all());
        return redirect()->route('kesehatan-jiwa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(KJiwa $kjiwa)
    {
        return view('partial.kesehatan-jiwa.show', compact(
            'kjiwa'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(KJiwa $kjiwa)
    {
        return view('partial.kesehatan-jiwa.edit', compact(
            'kjiwa'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KJiwa $kjiwa)
    {
        $request->validate([
            'id_register'=>'required',
            'id_pasien'=>'required',
            'nama'=>'required',
            'nik'=>'required',
            'tanggal_lahir'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required',
            'no_bpjs'=>'required',
            'kepala_keluarga'=>'required',
            'pendidikan'=>'required',
            'pekerjaan'=>'required',
            'diagnosa'=>'required',
            'terapi'=>'required',
            'tanggal_kunjungan'=>'required',
            'kunjungan'=>'required',
            'keterangan'=>'required',
        ]);

        $note->update($request->all());

        return redirect()->route('kesehatan-jiwa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(KJiwa $kjiwa)
    {
        $kjiwa->delete();

        return redirect()->route('kesehatan-jiwa.index')->with('succes', 'Data Berhasil di Hapus');
    }
}

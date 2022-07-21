<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Penyakit;
use RealRashid\SweetAlert\Facades\Alert;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('identitas_penyakit')->orderByDesc('id_identitas_penyakit')->paginate(10);
        return view('partial.penyakit.penyakit', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partial.penyakit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insertPenyakit(Request $post)
    {
        $valididatedData = $post->validate([
            'id_register' => 'required',
            'nama_penyakit' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required',
        ]);

        Penyakit::create($valididatedData);

        Alert::success('Sukses', 'Data Berhasil Tersimpan');
        return redirect('/penyakit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPenyakit($id_identitas_penyakit)
    {
        $data = DB::table('identitas_penyakit')->where('id_identitas_penyakit', $id_identitas_penyakit)->first();
        return view('partial.penyakit.edit', ['data' => $data]);
    }

    public function detailPenyakit($id_identitas_penyakit)
    {
        $data = DB::table('identitas_penyakit')->where('id_register', $id_identitas_penyakit)->first();
        return view('partial.penyakit.show', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePenyakit(Request $post)
    {
        DB::table('identitas_penyakit')->where('id_identitas_penyakit', $post->id_identitas_penyakit)->update([
            'id_register' => $post->id_register,
            'nama_penyakit' => $post->nama_penyakit,
            'tanggal' => $post->tanggal,
            'deskripsi' => $post->deskripsi,
        ]);

        return redirect('/penyakit')->with('success', 'Data berhasil diupdate!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapusPenyakit($id_penyakit)
    {
        $idpenyakit = DB::table('identitas_penyakit')->where('id_identitas_penyakit', $id_penyakit)->delete();

        return redirect('/penyakit');
    }

    public function searchPenyakit(Request $request)
    {
        $cari = $request->cari;

        $pasien = DB::table('identitas_penyakit')
            ->where('nama_penyakit', 'like', "%" . $cari . "%")
            ->paginate();

        return view('partial.penyakit.penyakit', ['data' => $pasien]);
    }
}

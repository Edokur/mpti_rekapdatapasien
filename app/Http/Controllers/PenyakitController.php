<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Penyakit;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Identitas::all();
        // return view('partial.identitas-pasien.identitas-pasien', compact(
        //     'data'
        // ));
        $data = DB::table('identitas_penyakit')->paginate(10);
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

        return redirect('/penyakit')->with('success', 'Data baru berhasil ditambahkan!');
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
    public function editPenyakit($id_penyakit)
    {
        $data = DB::table('identitas_penyakit')->where('id_identitas_penyakit', $id_penyakit)->first();
        return view('partial.penyakit.edit', ['data' => $data]);
    }

    // public function detailPenyakit($id_penyakit)
    // {
    //     $data = DB::table('penyakit')->where('id_register', $penyakit)->first();
    //     return view('partial.ipenyakit.show', ['data' => $data]);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePenyakit(Request $post)
    {
        DB::table('identitas_pasien')->where('id_identitas_penyakit', $post->id_penyakit)->update([
            'id_identitas_penyakit' => $post->id_identitas_penyakit,
            'nama_penyakit' => $post->nama_penyakit,
            'tangggal' => $post->tangggal,
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

        return redirect('/penyakit')->with('success', 'Data berhasil dihapus!');
    }
    // public function searchIdentitas(Request $request)
    // {
    //     // menangkap data pencarian
    //     $cari = $request->cari;

    //     // mengambil data dari table pegawai sesuai pencarian data
    //     $pasien = DB::table('identitas_pasien')
    //         ->where('nama_pasien', 'like', "%" . $cari . "%")
    //         ->paginate();

    //     // mengirim data pasien ke view index
    //     return view('partial.identitas_pasien.identitas_pasien', ['data' => $pasien]);
    // }
}

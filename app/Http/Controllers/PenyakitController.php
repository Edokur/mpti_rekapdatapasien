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

        Alert::success('Sukses', 'Data Berhasil Tersimpan');
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
        // dd($data);

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
    public function searchPenyakit(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $pasien = DB::table('identitas_penyakit')
            ->where('nama_penyakit', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pasien ke view index
        return view('partial.penyakit.penyakit', ['data' => $pasien]);
    }
}

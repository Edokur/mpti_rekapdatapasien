<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Penyakit;
use Illuminate\Support\Facades\Session;
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

        DB::table('surveilans_2')->insert([
            // 'identitas_penyakit_id' => $post->id_identitas_penyakit,
            'id_register' => $post->id_register,
            'nama_penyakit' => $post->nama_penyakit,
            'lakilaki' => 0,
            'perempuan' => 0,
            'lga' => 0,
            'lgb' => 0,
            'lgc' => 0,
            'lgd' => 0,
            'lge' => 0,
            'lgf' => 0,
            'lgg' => 0,
            'lgh' => 0,
            'lgi' => 0,
            'lgj' => 0,
            'lgk' => 0,
            'lgl' => 0,
            'pga' => 0,
            'pgb' => 0,
            'pgc' => 0,
            'pgd' => 0,
            'pge' => 0,
            'pgf' => 0,
            'pgg' => 0,
            'pgh' => 0,
            'pgi' => 0,
            'pgj' => 0,
            'pgk' => 0,
            'pgl' => 0,
            'total_kunjungan' => 0,

        ]);

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
        DB::table('surveilans_2')->where('id_surveilens2', $post->id_identitas_penyakit)->update([
            'id_register' => $post->id_register,
            'nama_penyakit' => $post->nama_penyakit,
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
        DB::table('identitas_penyakit')->where('id_identitas_penyakit', $id_penyakit)->delete();
        DB::table('surveilans_2')->where('id_surveilens2', $id_penyakit)->delete();

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

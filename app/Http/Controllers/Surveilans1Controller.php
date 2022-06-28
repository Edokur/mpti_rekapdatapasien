<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Surveilans1;

class Surveilans1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('surveilans_1')->paginate(10);
        return view('partial.surveilans_1.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partial.surveilans_1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insertSur(Request $post)
    {
        $valididatedData = $post->validate([
            'id' => 'required',
            'id_pasien' => 'required',
            'nama_pasien' => 'required',
            'minggu' => 'required',
            'umur' => 'required',
            'tanggal' => 'required',
            'diagnosa' => 'required',
        ]);

        Surveilans1::create($valididatedData);

        return redirect('/surveilans_1')->with('success', 'Data baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detailSurveilans1($id_surveilans1)
    {
        $data = DB::table('surveilans_1')->where('id', $id_surveilans1)->first();
        return view('partial.surveilans_1.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editSurveilans1($id_surveilans1)
    {
        $data = DB::table('surveilans_1')->where('id', $id_surveilans1)->first();
        return view('partial.surveilans-1.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateSurveilans1(Request $post)
    {
        DB::table('surveilans_1')->where('id', $post->id)->update([
            'id' => $post->id,
            'id_pasien' => $post->id_pasien,
            'nama_pasien' => $post->nama_pasien,
            'umur' => $post->umur,
            'tanggal' => $post->tanggal,
            'diagnosa' => $post->diagnosa,
        ]);

        return redirect('/identitas_pasien')->with('success', 'Data berhasil diupdate!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapusSurveilans1($id_surveilans1)
    {
        $surveilans1 = DB::table('surveilans_1')->where('id', $id_surveilans1)->delete();

        return redirect('/surveilans_1')->with('success', 'Data berhasil dihapus!');;
    }
}

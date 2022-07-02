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
        $identitas_pasien = DB::table('identitas_pasien')->get();
        $data = array(
            'identitas_pasien' => $identitas_pasien,
        );
        return view('partial.surveilans_1.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insertSurveilans1(Request $post)
    {
        $valididatedData = $post->validate([
            'id_surveilens1' => 'required',
            'pasien_id' => 'required',
            'nama_pasien' => 'required',
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
    public function detailSurveilans1($id_surveilans1) //done
    {
        $data1 = DB::table('identitas_pasien')->where('id_pasien', $id_surveilans1)->first();
        $data = DB::table('surveilans_1')->where('pasien_id', $id_surveilans1)->first();
        return view('partial.surveilans_1.show', ['data' => $data],['data1' => $data1]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editSurveilans1($id_surveilans1)
    {
        $data1 = DB::table('identitas_pasien')->where('id_pasien', $id_surveilans1)->first();        
        $data = DB::table('surveilans_1')->where('pasien_id', $id_surveilans1)->first();
        return view('partial.surveilans_1.edit', ['data' => $data], ['data1' => $data1]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateSurveilans1(Request $post) // done
    {
        DB::table('surveilans_1')->where('pasien_id', $post->pasien_id)->update([
            'pasien_id' => $post->pasien_id,
            'umur' => $post->umur,
            'tanggal' => $post->tanggal,
            'diagnosa' => $post->diagnosa,
        ]);
        return redirect('/surveilans_1')->with('success', 'Data berhasil diupdate!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapusSurveilans1($id_surveilans1) // done
    {
        $surveilans1 = DB::table('surveilans_1')->where('pasien_id', $id_surveilans1)->delete();

        return redirect('/surveilans_1')->with('success', 'Data berhasil dihapus!');;
    }
}

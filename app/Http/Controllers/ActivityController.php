<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Identitas;
use App\Models\Activity;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data1 = DB::table('identitas_pasien')->first();
        $data = DB::table('log_activity')->paginate(10);
        return view('partial.activity', ['data' => $data],['data1' => $data1]);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     return view('partial.identitas_pasien.create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function insertIdentitas(Request $post)
    // {
    //     $valididatedData = $post->validate([
    //         'id_pasien' => 'required',
    //         'nama_pasien' => 'required',
    //         'tanggal_lahir' => 'required',
    //         'jenis_kelamin' => 'required',
    //         'alamat' => 'required',
    //         'kepala_keluarga' => 'required',
    //         'nik' => 'required',
    //         'no_bpjs' => 'required',
    //         'pendidikan' => 'required',
    //         'pekerjaan' => 'required',
    //     ]);

    //     Identitas::create($valididatedData);

    //     $valididatedData2 = $post->validate([
    //         'identitas_pasien_id' => 'required',
    //         'nama_pasien' => 'required',
    //     ]);

    //     Activity::create($valididatedData2);

    //     return redirect('/identitas_pasien')->with('success', 'Data baru berhasil ditambahkan!');
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function detailIdentitas($id_identitas)
    // {
    //     $data = DB::table('identitas_pasien')->where('id_pasien', $id_identitas)->first();
    //     return view('partial.identitas_pasien.show', ['data' => $data]);
    //     // return view('partial.identitas.show', compact(
    //     //     'identitas'
    //     // ));
    //     // return view('note.show', compact('note'));
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function editIdentitas($id_identitas)
    // {
    //     $data = DB::table('identitas_pasien')->where('id_pasien', $id_identitas)->first();
    //     return view('partial.identitas_pasien.edit', ['data' => $data]);
    //     // return view('partial.identitas-pasien.edit', compact(
    //     //     'identitas'
    //     // ));
    //     // return view('note.edit', compact('note'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function updateIdentitas(Request $post)
    // {
    //     DB::table('identitas_pasien')->where('id_pasien', $post->id_pasien)->update([
    //         'id_pasien' => $post->id_pasien,
    //         'nama_pasien' => $post->nama_pasien,
    //         'tanggal_lahir' => $post->tanggal_lahir,
    //         'jenis_kelamin' => $post->jenis_kelamin,
    //         'alamat' => $post->alamat,
    //         'kepala_keluarga' => $post->kepala_keluarga,
    //         'nik' => $post->nik,
    //         'no_bpjs' => $post->no_bpjs,
    //         'pendidikan' => $post->pendidikan,
    //         'pekerjaan' => $post->pekerjaan,
    //     ]);

    //     return redirect('/identitas_pasien')->with('success', 'Data berhasil diupdate!');;
    //     // $identitas->update($request->all());

    //     // return redirect()->route('identitas-pasien.index');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function hapusIdentitas($id_identitas)
    // {
    //     $identitas = DB::table('identitas_pasien')->where('id_pasien', $id_identitas)->delete();

    //     return redirect('/identitas_pasien')->with('success', 'Data berhasil dihapus!');;
    // }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Identitas;
use App\Models\Activity;

class IdentitasController extends Controller
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
        $data = DB::table('identitas_pasien')->paginate(10);
        return view('partial.identitas_pasien.identitas_pasien', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partial.identitas_pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insertIdentitas(Request $post)
    {
        $valididatedData = $post->validate([
            'id_register' => 'required',
            'nama_pasien' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'kepala_keluarga' => 'required',
            'nik' => 'required',
            'no_bpjs' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
        ]);

        Identitas::create($valididatedData);

        // tambah ke db log
        DB::table('log_activity')->insert([
            'activity_id' => $post->id_register,
            'jenis_data' => 'Identitas Pasien',
            'deskripsi' => 'Tambah Data',
        ]);

        return redirect('/identitas_pasien')->with('success', 'Data baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detailIdentitas($id_identitas)
    {
        $data = DB::table('identitas_pasien')->where('id_register', $id_identitas)->first();
        return view('partial.identitas_pasien.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editIdentitas($id_identitas)
    {
        $data = DB::table('identitas_pasien')->where('id_register', $id_identitas)->first();
        return view('partial.identitas_pasien.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateIdentitas(Request $post)
    {
        DB::table('identitas_pasien')->where('id_register', $post->id_register)->update([
            'id_register' => $post->id_register,
            'nama_pasien' => $post->nama_pasien,
            'tanggal_lahir' => $post->tanggal_lahir,
            'jenis_kelamin' => $post->jenis_kelamin,
            'alamat' => $post->alamat,
            'kepala_keluarga' => $post->kepala_keluarga,
            'nik' => $post->nik,
            'no_bpjs' => $post->no_bpjs,
            'pendidikan' => $post->pendidikan,
            'pekerjaan' => $post->pekerjaan,
        ]);

        return redirect('/identitas_pasien')->with('success', 'Data berhasil diupdate!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapusIdentitas($id_identitas)
    {
        $identitas = DB::table('identitas_pasien')->where('id_register', $id_identitas)->delete();

        return redirect('/identitas_pasien')->with('success', 'Data berhasil dihapus!');;
    }
}

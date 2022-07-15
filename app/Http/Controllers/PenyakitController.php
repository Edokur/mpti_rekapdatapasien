<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Penyakit;

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
    public function insertIpenyakit(Request $post)
    {
        $valididatedData = $post->validate([
            'id_identitas_penyakit' => 'required',
            'nama_penyakit' => 'required',
            'tangggal' => 'required',
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
    // public function updateIdentitas(Request $post)
    // {
    //     DB::table('identitas_pasien')->where('id_register', $post->id_register)->update([
    //         'id_register' => $post->id_register,
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
    //     DB::table('log_activity')->insert([
    //         'nama_pasien' => $post->nama_pasien,
    //         'jenis_data' => 'Identitas Pasien',
    //         'deskripsi' => 'Ubah Data',
    //         'tanggal' => Carbon::now(),
    //     ]);

    //     return redirect('/identitas_pasien')->with('success', 'Data berhasil diupdate!');;
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function hapusIdentitas($id_identitas)
    // {
       
    //     $items = DB::table('identitas_pasien')
    //          ->select('*')
    //          ->where('id_register','=', $id_identitas)
    //          ->first();
    //     // $nama = DB::select('SELECT nama_pasien FROM identitas_pasien WHERE id_register = ?', [$id_identitas]);
    //     // var_dump($items->nama_pasien);
    //     // die;

    //     DB::table('log_activity')->insert([
    //         'nama_pasien' => $items->nama_pasien,
    //         'jenis_data' => 'Identitas Pasien',
    //         'deskripsi' => 'Hapus Data',
    //         'tanggal' => Carbon::now(),
    //     ]);

    //     $identitas = DB::table('identitas_pasien')->where('id_register', $id_identitas)->delete();
    //     return redirect('/identitas_pasien')->with('success', 'Data berhasil dihapus!');;
    // }
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

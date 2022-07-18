<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Surveilans1;
use RealRashid\SweetAlert\Facades\Alert;

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
        return view('partial.surveilans_1.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insertSurveilans1(Request $post)
    {
        $data = $post->input('nama_pasien');

        $nama_pasien = $this->get_namapasien($data);

        $post->validate([
            'id_register' => 'required',
            'nama_pasien' => 'required',
            'umur' => 'required',
            'tanggal' => 'required',
            'diagnosa' => 'required',
        ]);

        // Surveilans1::create($valididatedData); 
        Surveilans1::create([
            'id_register' => $post->input('id_register'),
            'nama_pasien' => $nama_pasien->nama_pasien,
            'umur' => $post->input('umur'),
            'tanggal' => $post->input('tanggal'),
            'diagnosa' => $post->input('diagnosa'),
        ]);

        Alert::success('Sukses', 'Data Berhasil Tersimpan');
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
        $data1 = DB::table('identitas_pasien')->where('id_register', $id_surveilans1)->first();
        $data = DB::table('surveilans_1')->where('id_register', $id_surveilans1)->first();
        return view('partial.surveilans_1.show', ['data' => $data], ['data1' => $data1]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editSurveilans1($id_surveilans1)
    {
        $data1 = DB::table('identitas_pasien')->where('id_register', $id_surveilans1)->first();
        $data = DB::table('surveilans_1')->where('id_register', $id_surveilans1)->first();
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
        DB::table('surveilans_1')->where('id_register', $post->id_register)->update([
            'id_register' => $post->id_register,
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
        $surveilans1 = DB::table('surveilans_1')->where('id_surveilens1', $id_surveilans1)->delete();

        return redirect('/surveilans_1');
    }
    public function searchSurveilans1(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $pasien = DB::table('surveilans_1')
            ->where('nama_pasien', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pasien ke view index
        return view('partial.surveilans_1.index', ['data' => $pasien]);
    }
    public function get_pasien($id)
    {
        $data_pasien = DB::table('identitas_pasien')->where('id_pasien', $id)->first();

        return response()->json(['success' => true, 'data' => $data_pasien]);
    }
    public function get_namapasien($id_pasien)
    {
        $data_pasien = DB::table('identitas_pasien')->select('nama_pasien')->where('id_pasien', $id_pasien)->first();

        return $data_pasien;
    }
}

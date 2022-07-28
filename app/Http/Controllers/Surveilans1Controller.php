<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Surveilans1;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;

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

        $dateover = Carbon::now()->format('Y-m-d');
        $datein = $post->tanggal;

        if ($datein > $dateover) {
            Session::flash('gagal', 'Tanggal Invalid');
            return redirect('/surveilans_1/create');
        } else {
            $post->validate([
                'id_register' => 'required',
                'nama_pasien' => 'required',
                'umur' => 'required',
                'jenis_kelamin' => 'required',
                'alamat' => 'required',
                'tanggal' => 'required',
                'diagnosa' => 'required',
            ]);
        }
        // Surveilans1::create($valididatedData); 
        Surveilans1::create([
            'id_register' => $post->input('id_register'),
            'nama_pasien' => $nama_pasien->nama_pasien,
            'umur' => $post->input('umur'),
            'jenis_kelamin' => $post->input('jenis_kelamin'),
            'alamat' => $post->input('alamat'),
            'tanggal' => $post->input('tanggal'),
            'diagnosa' => $post->input('diagnosa'),
        ]);

        DB::table('log_activity')->insert([
            'nama_pasien' => $nama_pasien->nama_pasien,
            'jenis_data' => 'Surveilans 1',
            'deskripsi' => 'Tambah Data',
            'tanggal' => Carbon::now(),
        ]);

        Alert::success('Sukses', 'Data Berhasil Tersimpan');
        return redirect('/surveilans_1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detailSurveilans1($id_surveilans1) //done
    {
        $data = DB::table('surveilans_1')->where('id_surveilens1', $id_surveilans1)->first();
        return view('partial.surveilans_1.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editSurveilans1($id_surveilens1)
    {
        $data = DB::table('surveilans_1')->where('id_surveilens1', $id_surveilens1)->first();
        return view('partial.surveilans_1.edit', ['data' => $data]);
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
        $dateover = Carbon::now()->format('Y-m-d');
        $datein = $post->tanggal;

        $data = $this->nama_surveilans1($post->id_surveilens1);

        if ($datein > $dateover) {
            Session::flash('gagal', 'Tanggal Invalid');
            return redirect('/surveilans_1/editSurveilans1/' . $post->id_surveilens1);
        } else {
            $get = DB::table('surveilans_1')->where('id_surveilens1', $post->id_surveilens1)->update([
                // 'id_register' => $post->id_register,
                'umur' => $post->umur,
                'tanggal' => $post->tanggal,
                'diagnosa' => $post->diagnosa,
            ]);

            DB::table('log_activity')->insert([
                'nama_pasien' => $data->nama_pasien,
                'jenis_data' => 'Surveilans 1',
                'deskripsi' => 'Ubah Data',
                'tanggal' => Carbon::now(),
            ]);
        }

        if ($get = true) {
            Alert::success('Sukses', 'Data Berhasil Di Update');
            return redirect('/surveilans_1');
        } else {
            Alert::error('Gagal', 'Data Gagal Di Update');
            return redirect('/surveilans_1');
        }
    }

    public function nama_surveilans1($id_surveilans1)
    {
        $data_pasien = DB::table('surveilans_1')->select('nama_pasien')->where('id_surveilens1', $id_surveilans1)->first();

        return $data_pasien;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapusSurveilans1($id_surveilans1) // done
    {
        $data = $this->nama_surveilans1($id_surveilans1);
        $surveilans1 = DB::table('surveilans_1')->where('id_surveilens1', $id_surveilans1)->delete();

        DB::table('log_activity')->insert([
            'nama_pasien' => $data->nama_pasien,
            'jenis_data' => 'Surveilans 1',
            'deskripsi' => 'Hapus Data',
            'tanggal' => Carbon::now(),
        ]);

        return redirect('/surveilans_1');
    }

    public function searchSurveilans1(Request $request)
    {

        $cari = $request->cari;

        $pasien = DB::table('surveilans_1')
            ->where('nama_pasien', 'like', "%" . $cari . "%")
            ->paginate();

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

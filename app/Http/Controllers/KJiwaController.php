<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\KJiwa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;

class KJiwaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('kesehatan_jiwa')->orderByDesc('id_kesehatan_jiwa')->paginate(10);
        return view('partial.kesehatan_jiwa.index', ['data' => $data]);
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

        return view('partial.kesehatan_jiwa.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insertKJiwa(Request $post)
    {
        $data = $post->input('nama_pasien');

        $nama_pasien = $this->get_namapasien($data);

        $dateover = Carbon::now()->format('Y-m-d');
        $datein = $post->tanggal_kunjungan;

        if ($datein > $dateover) {
            Session::flash('gagal', 'Tanggal Invalid');
            return redirect('/kesehatan_jiwa/create');
        }else {

            $post->validate([
                'id_register' => 'required',
                'nama_pasien' => 'required',
                'kunjungan' => 'required',
                'tanggal_kunjungan' => 'required',
                'diagnosa' => 'required',
                'terapi' => 'required',
                'dosis' => 'required',
                'keterangan' => 'required',
            ]);


            KJiwa::create([
                'id_register' => $post->input('id_register'),
                'nama_pasien' => $nama_pasien->nama_pasien,
                'pasien_id' => $post->input('nama_pasien'),
                'tanggal_lahir' => $post->input('tanggal_lahir'),
                'jenis_kelamin' => $post->input('jenis_kelamin'),
                'alamat' => $post->input('alamat'),
                'kepala_keluarga' => $post->input('kepala_keluarga'),
                'nik' => $post->input('nik'),
                'no_bpjs' => $post->input('no_bpjs'),
                'pendidikan' => $post->input('pendidikan'),
                'pekerjaan' => $post->input('pekerjaan'),
                'tanggal_kunjungan' => $post->input('tanggal_kunjungan'),
                'kunjungan' => $post->input('kunjungan'),
                'terapi' => $post->input('terapi'),
                'diagnosa' => $post->input('diagnosa'),
                'dosis' => $post->input('dosis'),
                'keterangan' => $post->input('keterangan'),
            ]);

            DB::table('log_activity')->insert([
                'nama_pasien' => $nama_pasien->nama_pasien,
                'jenis_data' => 'Kesehatan Jiwa',
                'deskripsi' => 'Tambah Data',
                'tanggal' => Carbon::now(),
            ]);
        }
        Alert::success('Sukses', 'Data Berhasil Tersimpan');
        return redirect('/kesehatan_jiwa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detailKJiwa($id_kjiwa)
    {
        $data = DB::table('kesehatan_jiwa')->where('id_kesehatan_jiwa', $id_kjiwa)->first();
        return view('partial.kesehatan_jiwa.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editKJiwa($id_kjiwa)
    {
        $data = DB::table('kesehatan_jiwa')->where('id_kesehatan_jiwa', $id_kjiwa)->first();
        return view('partial.kesehatan_jiwa.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateKJiwa(Request $post)
    {
        $data = $post->input('nama_pasien');

        $nama_pasien = $this->get_namapasien($data);

        $dateover = Carbon::now()->format('Y-m-d');
        $datein = $post->tanggal_kunjungan;

        if ($datein > $dateover) {
            Session::flash('gagal', 'Tanggal Invalid');
            return redirect('/kesehatan_jiwa/editKJiwa/'.$post->id_kesehatan_jiwa);
        }else {

            DB::table('kesehatan_jiwa')->where('id_kesehatan_jiwa', $post->id_kesehatan_jiwa)->update([
                'id_kesehatan_jiwa' => $post->input('id_kesehatan_jiwa'),
                // 'pasien_id' => $post->pasien_id,
                'nama_pasien' => $post->input('nama_pasien'),
                'nik' => $post->input('nik'),
                'tanggal_lahir' => $post->input('tanggal_lahir'),
                'alamat' => $post->input('alamat'),
                'jenis_kelamin' => $post->input('jenis_kelamin'),
                'no_bpjs' => $post->input('no_bpjs'),
                'kepala_keluarga' => $post->input('kepala_keluarga'),
                'pendidikan' => $post->input('pendidikan'),
                'pekerjaan' => $post->input('pekerjaan'),
                'diagnosa' => $post->input('diagnosa'),
                'terapi' => $post->input('terapi'),
                'dosis' => $post->input('dosis'),
                'tanggal_kunjungan' => $post->input('tanggal_kunjungan'),
                'kunjungan' => $post->input('kunjungan'),
                'keterangan' => $post->input('keterangan'),
            ]);

            DB::table('log_activity')->insert([
                'nama_pasien' => $post->input('nama_pasien'),
                'jenis_data' => 'Kesehatan Jiwa',
                'deskripsi' => 'Ubah Data',
                'tanggal' => Carbon::now(),
            ]);
        }
        return redirect('/kesehatan_jiwa')->with('success', 'Data berhasil diupdate!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapusKJiwa($id_kjiwa)
    {
        $items = DB::table('kesehatan_jiwa')
            ->select('*')
            ->where('id_kesehatan_jiwa', '=', $id_kjiwa)
            ->first();

        DB::table('log_activity')->insert([
            'nama_pasien' => $items->nama_pasien,
            'jenis_data' => 'Kesehatan Jiwa',
            'deskripsi' => 'Hapus Data',
            'tanggal' => Carbon::now(),
        ]);

        $idkjiwa = DB::table('kesehatan_jiwa')->where('id_kesehatan_jiwa', $id_kjiwa)->delete();

        return redirect('/kesehatan_jiwa');
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

    public function SearchKJiwa(Request $request)
    {
        $cari = $request->cari;

        $pegawai = DB::table('kesehatan_jiwa')
            ->where('nama_pasien', 'like', "%" . $cari . "%")
            ->paginate();

        return view('partial.kesehatan_jiwa.index', ['data' => $pegawai]);
    }
}

<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\User;
use App\Models\Perkesmas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PerkesmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('perkesmas')->paginate(10);
        return view('partial.perkesmas.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $identitas_pasien = DB::table('identitas_pasien')->get();
        // $produk = DB::table('produk')->get();
        $data = array(
            'identitas_pasien' => $identitas_pasien,
            // 'produk' => $produk,
        );
        // return view('produk.create', $data);
        return view('partial.perkesmas.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insertPerkesmas(Request $post)
    {

        $data = $post->input('nama_pasien');

        $nama_pasien = $this->get_namapasien($data);

        $post->validate([
            'id_register' => 'required',
            'nama_pasien' => 'required',
            'intervensi_keperawatan' => 'required',
            'diagnosa_keperawatan' => 'required',
            'implementasi_keperawatan' => 'required',
            'keterangan' => 'required',
        ]);

        Perkesmas::create([
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
            'intervensi_keperawatan' => $post->input('intervensi_keperawatan'),
            'diagnosa_keperawatan' => $post->input('diagnosa_keperawatan'),
            'implementasi_keperawatan' => $post->input('implementasi_keperawatan'),
            'keterangan' => $post->input('keterangan'),
        ]);


        Alert::success('Sukses', 'Data Berhasil Tersimpan');
        return redirect('/perkesmas');
    }

    public function get_namapasien($id_pasien)
    {
        $data_pasien = DB::table('identitas_pasien')->select('nama_pasien')->where('id_pasien', $id_pasien)->first();

        return $data_pasien;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detailPerkesmas($id_perkesmas)
    {
        $data = DB::table('perkesmas')->where('id_perkesmas', $id_perkesmas)->first();
        return view('partial.perkesmas.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPerkesmas($id_perkesmas)
    {
        $data = DB::table('perkesmas')->where('id_perkesmas', $id_perkesmas)->first();
        return view('partial.perkesmas.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePerkesmas(Request $post)
    {
        $data = $post->input('nama_pasien');

        $nama_pasien = $this->get_namapasien($data);

        DB::table('perkesmas')->where('id_perkesmas', $post->id_perkesmas)->update([
            'nama_pasien' => $post->input('nama_pasien'),
            // 'pasien_id' => $post->input('nama_pasien'),
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
            'intervensi_keperawatan' => $post->input('intervensi_keperawatan'),
            'diagnosa_keperawatan' => $post->input('diagnosa_keperawatan'),
            'implementasi_keperawatan' => $post->input('implementasi_keperawatan'),
            'keterangan' => $post->input('keterangan'),
        ]);
        return redirect('/perkesmas')->with('success', 'Data berhasil diupdate!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapusPerkesmas($id_perkesmas)
    {
        $perkesmas = DB::table('perkesmas')->where('id_perkesmas', $id_perkesmas)->delete();

        return redirect('/perkesmas')->with('success', 'Data berhasil dihapus!');;
    }

    public function get_pasien($id)
    {
        $data_pasien = DB::table('identitas_pasien')->where('id_pasien', $id)->first();

        return response()->json(['success' => true, 'data' => $data_pasien]);
    }

    public function SearchPerkesmas(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $pegawai = DB::table('perkesmas')
            ->where('nama_pasien', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('partial.perkesmas.index', ['data' => $pegawai]);
    }
}

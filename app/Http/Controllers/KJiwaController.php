<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KJiwa;

class KJiwaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('kesehatan_jiwa')->paginate(10);
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
        // $produk = DB::table('produk')->get();
        $data = array(
            'identitas_pasien' => $identitas_pasien,
            // 'produk' => $produk,
        );
        // return view('produk.create', $data);
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
        $valididatedData = $post->validate([
            'id_kesehatan_jiwa'=> 'required',
            'id_register'=>'required',
            'id_pasien'=>'required',
            'nama'=>'required',
            'nik'=>'required',
            'tanggal_lahir'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required',
            'no_bpjs'=>'required',
            'kepala_keluarga'=>'required',
            'pendidikan'=>'required',
            'pekerjaan'=>'required',
            'diagnosa'=>'required',
            'terapi'=>'required',
            'tanggal_kunjungan'=>'required',
            'kunjungan'=>'required',
            'keterangan'=>'required',
        ]);

        KJiwa::create($valididatedData);

        return redirect('/kesehatan_jiwa')->with('success', 'Data baru berhasil ditambahkan!');
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
    public function edit(KJiwa $kjiwa)
    {
        // return view('partial.kesehatan_jiwa.edit', compact(
        //     'kjiwa'
        // ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KJiwa $kjiwa)
    {
        // $request->validate([
        //     'id_register'=>'required',
        //     'id_pasien'=>'required',
        //     'nama'=>'required',
        //     'nik'=>'required',
        //     'tanggal_lahir'=>'required',
        //     'alamat'=>'required',
        //     'jenis_kelamin'=>'required',
        //     'no_bpjs'=>'required',
        //     'kepala_keluarga'=>'required',
        //     'pendidikan'=>'required',
        //     'pekerjaan'=>'required',
        //     'diagnosa'=>'required',
        //     'terapi'=>'required',
        //     'tanggal_kunjungan'=>'required',
        //     'kunjungan'=>'required',
        //     'keterangan'=>'required',
        // ]);

        // $note->update($request->all());

        // return redirect()->route('kesehatan-jiwa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapusKJiwa($id_kjiwa)
    {
        $idkjiwa = DB::table('kesehatan_jiwa')->where('id_kesehatan_jiwa', $id_kjiwa)->delete();

        return redirect('/kesehatan_jiwa')->with('success', 'Data berhasil dihapus!');
    }
}

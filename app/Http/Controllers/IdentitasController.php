<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Activity;
use App\Models\Identitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class IdentitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('identitas_pasien')->orderByDesc('id_pasien')->paginate(10);
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
        $nik_16 = strlen($post->nik);
        $bpjs_16 = strlen($post->no_bpjs);
        $dateover = Carbon::now()->format('Y-m-d');
        $datein = $post->tanggal_lahir;

        if ($datein > $dateover) {
            return back()->withErrors(['tanggal' => 'Tanggal Invalid']);
            // Session::flash('gagal', 'Tanggal Invalid');
            // return redirect('/identitas_pasien/create');
        } else if ($nik_16 != 16) {
            Session::flash('gagal', 'Nik harus berisi 16 Angka');
            return redirect('/identitas_pasien/create');
        } else if ($bpjs_16 != 13) {
            Session::flash('gagal', 'No BPJS harus berisi 13 Angka');
            return redirect('/identitas_pasien/create');
        } else {
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

            DB::table('log_activity')->insert([
                'nama_pasien' => $post->nama_pasien,
                'jenis_data' => 'Identitas Pasien',
                'deskripsi' => 'Tambah Data',
                'tanggal' => Carbon::now(),
            ]);

            Alert::success('Sukses', 'Data Berhasil Tersimpan');
            return redirect('/identitas_pasien');
        }
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detailIdentitas($id_identitas)
    {
        $data = DB::table('identitas_pasien')->where('id_pasien', $id_identitas)->first();
        return view('partial.identitas_pasien.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editIdentitas($id_pasien)
    {
        $data = DB::table('identitas_pasien')->where('id_pasien', $id_pasien)->first();
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
        $nik_16 = strlen($post->nik);
        $bpjs_16 = strlen($post->no_bpjs);

        $id = $post->id_pasien;

        $dateover = Carbon::now()->format('Y-m-d');
        $datein = $post->tanggal_lahir;

        if ($datein > $dateover) {
            Session::flash('gagal', 'Tanggal Invalid');
            return redirect('/identitas_pasien/create');
        } else if ($nik_16 != 16) {
            Session::flash('gagal', 'Nik harus berisi 16 Angka');
            return redirect('/identitas_pasien/editIdentitas/' . $id . '');
        } else if ($bpjs_16 != 13) {
            Session::flash('gagal', 'No BPJS harus berisi 13 Angka');
            return redirect('/identitas_pasien/editIdentitas/' . $id . '');
        } else {
            DB::table('identitas_pasien')->where('id_pasien', $post->id_pasien)->update([
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
            DB::table('log_activity')->insert([
                'nama_pasien' => $post->nama_pasien,
                'jenis_data' => 'Identitas Pasien',
                'deskripsi' => 'Ubah Data',
                'tanggal' => Carbon::now(),
            ]);

            return redirect('/identitas_pasien')->with('success', 'Data berhasil diupdate!');;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapusIdentitas($id_identitas)
    {

        $items = DB::table('identitas_pasien')
            ->select('*')
            ->where('id_pasien', '=', $id_identitas)
            ->first();

        $cek_data = $this->validasipasien($id_identitas);
        if ($cek_data == true) {
            // Session::flash('gagal', 'Data Pasien Digunakan');
            Alert::warning('Peringatan', 'Data Sedang Digunakan');
            return redirect('/identitas_pasien');
        } else {
            DB::table('log_activity')->insert([
                'nama_pasien' => $items->nama_pasien,
                'jenis_data' => 'Identitas Pasien',
                'deskripsi' => 'Hapus Data',
                'tanggal' => Carbon::now(),
            ]);

            DB::table('identitas_pasien')->where('id_pasien', $id_identitas)->delete();
            Alert::success('Sukses', 'Data Berhasil di hapus');
            return redirect('/identitas_pasien');
        }
    }

    public function validasipasien($id_pasien)
    {
        $get_perkesmas = DB::select('SELECT pasien_id FROM perkesmas
        WHERE pasien_id = ?', [$id_pasien]);

        $get_kesehatan_jiwa = DB::select('SELECT pasien_id FROM kesehatan_jiwa
        WHERE pasien_id = ?', [$id_pasien]);

        if (count($get_perkesmas) || count($get_kesehatan_jiwa) != 0) {
            return true;
        } else {
            return false;
        }
    }

    public function searchIdentitas(Request $request)
    {
        $cari = $request->cari;

        $pasien = DB::table('identitas_pasien')
            ->where('nama_pasien', 'like', "%" . $cari . "%")
            ->paginate();

        return view('partial.identitas_pasien.identitas_pasien', ['data' => $pasien]);
    }

    public function get_pasien($id)
    {
        $data_pasien = DB::table('identitas_pasien')->where('id_pasien', $id)->first();

        return response()->json(['success' => true, 'data' => $data_pasien]);
    }
}

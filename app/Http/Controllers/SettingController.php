<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\Rules\Password;

class SettingController extends Controller
{
    public function index()
    {
        $data = DB::table('users')->first();
        return view('partial.settings.settings', ['data' => $data]);
    }

    public function editSetting($id)
    {
        $data = DB::table('users')->where('id', $id)->first();
        return view('partial.settings.edit', ['data' => $data]);
    }

    public function updateSettings(Request $post)
    {
        $valididatedData = $post->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        $get = DB::table('users')->where('id', $post->id_settings)->update([
            'name' => $post->nama,
            'email' => $post->email,
            'alamat' => $post->alamat,
            'no_hp' => $post->no_hp
        ]);

        if ($get = true) {
            Alert::success('Sukses', 'Data Berhasil Di Update');
            return redirect('/settings');
        } else {
            Alert::error('Gagal', 'Data Gagal Di Update');
            return redirect('/settings');
        }
    }

    public function updatePassword(Request $post)
    {
        $sandi_baru = $post->sandi_baru;
        $konfirmasi_sandi = $post->konfirmasi_sandi;

        $validasi_password = strlen($sandi_baru);
        $get = DB::table('users')->get()->first();

        $enkripsi = md5($post->sandi_lama);

        if ($enkripsi != $get->password) {
            Alert::toast('Password Salah', 'warning');
            return redirect('/settings');
        }

        if ($validasi_password < 8) {
            Alert::toast('Password minimal berisi 8 karakter', 'warning');
            return redirect('/settings');
        }


        if ($konfirmasi_sandi != $sandi_baru) {
            Alert::toast('Password Tidak Sama', 'warning');
            return redirect('/settings');
        }

        $get = DB::table('users')->where('id', $post->id_settings)->update([
            'password' => md5($post->sandi_baru),
        ]);

        if ($get = true) {
            Alert::success('Sukses', 'Sandi Berhasil Di Perbarui');
            return redirect('/settings');
        } else {
            Alert::error('Gagal', 'Sandi Gagal Di Perbarui');
            return redirect('/settings');
        }
    }
}

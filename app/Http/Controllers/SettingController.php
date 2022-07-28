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

        $post->validate([
            'old_password' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        $currentPassword = auth()->user()->password;
        $old_password = $post->old_password;

        if (Hash::check($old_password, $currentPassword)) {
            auth()->user()->update([
                'password' => bcrypt($post->password),
            ]);
            Alert::toast('Password Berhasil Di ganti', 'success');
            return redirect('/settings');
        } else {
            Alert::toast('Password Salah', 'warning');
            return redirect('/settings');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function PHPSTORM_META\map;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate(([
            'email' => 'required|email:dns',
            'password' => 'required',
            // 'remember_token' => 'required|captcha'
        ]));

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Alert::toast('Sealamat Datang', 'success');
            return redirect()->intended('/dashboard');
        }
        Alert::toast('Silahkan pastikan email dan kata sandi sudah benar.', 'warning');
        return back();
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function resetpass()
    {
        return view('resetpw');
    }

    public function cek_pass(Request $post)
    {
        $email = $post->email;
        $no_hp = $post->no_hp;

        $get = DB::table('users')->get()->first();

        if ($email != $get->email || $no_hp != $get->no_hp) {
            return back()->withErrors(['gagal' => 'Email dan Nomor yang anda masukkan salah']);
        } else {
            return redirect('/change_pass');
        }
    }

    public function change_pass()
    {
        return view('ubahpw');
    }

    public function update_pass(Request $post)
    {
        $post->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        DB::table('users')->update([
            'password' => bcrypt($post->password),
        ]);
        Alert::toast('Password Berhasil Di ganti', 'success');
        return redirect('/login');
    }
}

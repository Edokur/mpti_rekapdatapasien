<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function index()
    {
        $log_activity = DB::table('log_activity')->get();
        $kesehatan_jiwa = DB::table('kesehatan_jiwa')->get();
        $surveilans_1 = DB::table('surveilans_1')->get();
        $perkesmas = DB::table('perkesmas')->get();
        $surveilans_2 = DB::table('surveilans_2')->get();
        $note = DB::table('note')->get();

        $jumlah_surveilans_2 = count($surveilans_2);
        $jumlah_kesehatan_jiwa = count($kesehatan_jiwa);
        $jumlah_surveilans_1 = count($surveilans_1);
        $jumlah_perkesmas = count($perkesmas);

        $data = array(
            'log_activity' => $log_activity,
            'kesehatan_jiwa' => $kesehatan_jiwa,
            'surveilans_1' => $surveilans_1,
            'jumlah_surveilans_2' => $jumlah_surveilans_2,
            'jumlah_kesehatan_jiwa' => $jumlah_kesehatan_jiwa,
            'jumlah_surveilans_1' => $jumlah_surveilans_1,
            'jumlah_perkesmas' => $jumlah_perkesmas,
            'note' => $note
        );

        // dd($data);
        return view('partial/home', $data);
    }
}

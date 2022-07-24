<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Surveilans2;
use RealRashid\SweetAlert\Facades\Alert;

class Surveilans2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('surveilans_2')->paginate(10);
        return view('partial.surveilans_2.surveilans_2', ['data' => $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detailSurveilans2($id_register)
    {
        $data = DB::table('surveilans_2')->where('id_register', $id_register)->first();
        return view('partial.surveilans_2.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editSurveilans2($id_surveilens2)
    {
        // $data1 = DB::table('identitas_pasien')->where('id_register', $id_surveilans1)->first();
        $data = DB::table('surveilans_2')->where('id_surveilens2', $id_surveilens2)->first();
        return view('partial.surveilans_2.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateSurveilans2(Request $post) // done
    {
        DB::table('surveilans_2')->where('id_surveilens2', $post->id_surveilens2)->update([
            'lakilaki' => $post->lga+$post->lgb+$post->lgc+$post->lgd+$post->lge+$post->lgf+$post->lgg+$post->lgh+$post->lgi+$post->lgj+$post->lgk+$post->lgl,
            'perempuan' => $post->pga+$post->pgb+$post->pgc+$post->pgd+$post->pge+$post->pgf+$post->pgg+$post->pgh+$post->pgi+$post->pgj+$post->pgk+$post->pgl,
            'lga' => $post->lga,
            'lgb' => $post->lgb,
            'lgc' => $post->lgc,
            'lgd' => $post->lgd,
            'lge' => $post->lge,
            'lgf' => $post->lgf,
            'lgg' => $post->lgg,
            'lgh' => $post->lgh,
            'lgi' => $post->lgj,
            'lgj' => $post->lgi,
            'lgk' => $post->lgk,
            'lgl' => $post->lgl,
            'pga' => $post->pga,
            'pgb' => $post->pgb,
            'pgc' => $post->pgc,
            'pgd' => $post->pgd,
            'pge' => $post->pge,
            'pgf' => $post->pgf,
            'pgg' => $post->pgg,
            'pgh' => $post->pgh,
            'pgi' => $post->pgi,
            'pgj' => $post->pgj,
            'pgk' => $post->pgk,
            'pgl' => $post->pgl,
            'total_kunjungan' => $post->lga+$post->lgb+$post->lgc+$post->lgd+$post->lge+$post->lgf+$post->lgg+$post->lgh+$post->lgi+$post->lgj+$post->lgk+$post->lgl+$post->pga+$post->pgb+$post->pgc+$post->pgd+$post->pge+$post->pgf+$post->pgg+$post->pgh+$post->pgi+$post->pgj+$post->pgk+$post->pgl,
        ]);
        return redirect('/surveilans_2')->with('success', 'Data berhasil diupdate!');;
    }
}

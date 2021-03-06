<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;



class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('note')->orderByDesc('id_note')->paginate(10);
        return view('partial.catatan.note', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partial.catatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insertNote(Request $post)
    {
        $validatedData = $post->validate([
            'status' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        Note::create($validatedData);

        Alert::success('Sukses', 'Data Berhasil Tersimpan');
        return redirect('/note');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detailNote($id_note)
    {
        $data = DB::table('note')->where('id_note', $id_note)->first();
        return view('partial.catatan.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editNote($id_note)
    {
        $data = DB::table('note')->where('id_note', $id_note)->first();
        return view('partial.catatan.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateNote(Request $post)
    {
        $get = DB::table('note')->where('id_note', $post->id_note)->update([
            'status' => $post->status,
            'judul' => $post->judul,
            'deskripsi' => $post->deskripsi,
        ]);

        if ($get = true) {
            Alert::success('Sukses', 'Data Berhasil Di Update');
            return redirect('/note');
        } else {
            Alert::error('Gagal', 'Data Gagal Di Update');
            return redirect('/note');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapusNote($id_note)
    {
        DB::table('note')->where('id_note', $id_note)->delete();

        return redirect('/note');
    }
}

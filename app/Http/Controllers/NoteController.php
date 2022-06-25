<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Note;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('note')->paginate(10);
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

        return redirect('/note')->with('success', 'Data baru berhasil ditambahkan!');;
        // return redirect()->route('note.index');
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
        // return view('partial.catatan.show', compact(
        //     'note'
        // ));
        // return view('note.show', compact('note'));
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
        // return view('partial.catatan.edit', compact(
        //     'note'
        // ));
        // return view('note.edit', compact('note'));
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
        DB::table('note')->where('id_note', $post->id)->update([
            'status' => $post->status,
            'judul' => $post->judul,
            'deskripsi' => $post->deskripsi,
        ]);
        return redirect('/note')->with('success', 'Data berhasil diupdate!');;

        // return redirect()->route('note.index')->with('succes', 'Catatan Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapusNote($id_note)
    {
        $note = DB::table('note')->where('id_note', $id_note)->delete();

        return redirect('/note')->with('success', 'Data berhasil dihapus!');;
    }
}

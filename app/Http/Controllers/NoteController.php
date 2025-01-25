<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    /**
     * C = Create
     * R = Read
     * U = Update
     * D = Delete
     */

     public function index()
     {
        $notes = Note::all();
        return view ('notes.index', compact('notes'));
     }

     public function create()
     {
        return view('notes.create');
     }

     public function store(Request $request) {
        $note = new Note();
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();

        return redirect()->route('note.index');
     }
}

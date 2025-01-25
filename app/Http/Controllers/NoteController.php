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
        /* $note = new Note();
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save(); */

        /* Note::create([
            'title' => $request->title,
            'description' => $request->description
        ]); */

        //if the fields in the form are the same as the fields in the database, we can use the following code:
        Note::create($request->all());

        return redirect()->route('note.index');
     }

     public function edit(Note $note)
     {
        return view('notes.edit', compact('note'));
     }
}

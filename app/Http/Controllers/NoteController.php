<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class NoteController extends Controller
{
    /**
     * C = Create
     * R = Read
     * U = Update
     * D = Delete
     */

     public function index(): View
     {
        $notes = Note::all();
        return view ('notes.index', compact('notes'));
     }

     public function create(): View
     {
        return view('notes.create');
     }

     public function store(Request $request): RedirectResponse
     {
        $request->validate([
            'title' => 'required|max:20|min:3',
            'description' => 'required|max:255|min:10'
        ]);

        //if the fields in the form are the same as the fields in the database, we can use the following code:
        Note::create($request->all());

        return redirect()->route('note.index');
     }

     public function edit(Note $note): View
     {
        return view('notes.edit', compact('note'));
     }

     public function update(Request $request, Note $note): RedirectResponse
     {
        $request->validate([
            'title' => 'required|max:20|min:3',
            'description' => 'required|max:255|min:10'
        ]);

        $note->update($request->all());
        return redirect()->route('note.index');
     }

     public function show(Note $note): View
     {
        return view ('notes.show',compact('note'));
     }

     public function destroy(Note $note): RedirectResponse
     {
        $note->delete();
        return redirect()->route('note.index');
     }
}

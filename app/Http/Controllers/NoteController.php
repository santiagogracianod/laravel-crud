<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\NoteRequest;

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

     public function store(NoteRequest $request): RedirectResponse
     {
        //if the fields in the form are the same as the fields in the database, we can use the following code:
        Note::create($request->all());

        return redirect()->route('note.index');
     }

     public function edit(Note $note): View
     {
        return view('notes.edit', compact('note'));
     }

     public function update(NoteRequest $request, Note $note): RedirectResponse
     {
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

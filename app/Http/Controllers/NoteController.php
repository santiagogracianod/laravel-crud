<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index($id = 25)
    {
        return view('notes.index', [
            'id' => $id
        ]);
    }
}

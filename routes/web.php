<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/notes/{id?}', [NoteController::class, 'index'])->name('note.index');

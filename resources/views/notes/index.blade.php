@extends('layouts.app')
@section('title', 'Notes')


@section('content')
<a href= {{ route('note.create') }}>Create new note</a>
<h1>Notes:</h1>
<ul>
    @forelse ($notes as $note)
        <li><a href=""> {{ $note->title }} </a></li>
    @empty
        <li>No notes found</li>
    @endforelse
</ul>

@endsection

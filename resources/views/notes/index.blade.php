@extends('layouts.app')
@section('title', 'Notes')


@section('content')
<a href= {{ route('note.create') }}>Create new note</a>
<h1>Notes:</h1>
<ul>
    @forelse ($notes as $note)
        <li>
            <a href={{ route('note.show',$note->id) }}> {{ $note->title }} </a>
            <a href={{ route('note.edit',$note->id) }}>Edit</a>
            <form action={{ route('note.destroy',$note->id) }} method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @empty
        <li>No notes found</li>
    @endforelse
</ul>

@endsection

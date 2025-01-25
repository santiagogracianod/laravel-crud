@extends('layouts.app')

@section('title', 'Edit note')

@section('content')
    <a href={{ route('note.index') }}>Back</a>
    <h1>Edit note</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action={{ route('note.update', $note->id) }} method="POST">
    @method('PUT')
    @csrf
    @method('PUT')
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{ $note->title }}">
    <label for="description">Description</label>
    <input type="text" name="description" id="description" value="{{ $note->description }}">
    <button type="submit">Update note</button>
</form>
@endsection

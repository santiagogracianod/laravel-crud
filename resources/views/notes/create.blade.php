@extends('layouts.app')
@section('title', 'Create a new note')

@section('content')
<a href={{ route('note.index') }}>Back</a>
<h1>Create Note</h1>
<form action="{{ route('note.store') }}" method="POST">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title">
    <label for="description">Description</label>
    <input type="text" name="description" id="description" >
    <button type="submit">Create Note</button>
@endsection

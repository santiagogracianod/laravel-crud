@extends('layouts.app')
@section('title', 'Create a new note')

@section('content')
<a href={{ route('note.index') }}>Back</a>
<h1>Create Note</h1>
<form action="{{ route('note.store') }}" method="POST">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title">
    <label for="content">Description</label>
    <input name="content" id="description" cols="30" rows="10"></input>
    <button type="submit">Create Note</button>
@endsection

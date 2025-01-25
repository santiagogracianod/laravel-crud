@extends('layouts.app')
@section('name', 'Show note')

@section('content')
    <a href={{ route('note.index') }}>Back</a>
    <h1>Note datails</h1>
    <h3> Title:
        <strong> {{ $note->title }} </strong>
    </h3>
    <h3> Description:
        <strong> {{ $note->description }} </strong>
    </h3>

@endsection

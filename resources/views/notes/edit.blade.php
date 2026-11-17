@extends('layouts.app')
@section('title', 'Edit Catatan')
@section('content')
    <h1>Edit Catatan</h1>
    <form method="POST" action="{{ route('notes.update', $note) }}">
        @method('PUT')
        @include('notes._form')
    </form>
@endsection

@extends('layouts.app')
@section('title', 'Tambah Catatan')
@section('content')
    <h1>Tambah Catatan</h1>
    <form method="POST" action="{{ route('notes.store') }}">
        @include('notes._form')
    </form>
@endsection

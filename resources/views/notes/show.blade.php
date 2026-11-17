@extends('layouts.app')
@section('title', $note->title)
@section('content')
    <h1>{{ $note->title }}</h1>
    <p><span class="badge">{{ $note->category }}</span>
       <small>&nbsp;Dibuat {{ $note->created_at->format('d M Y H:i') }}</small></p>
    <p style="white-space: pre-line;">{{ $note->content ?: '(tidak ada isi)' }}</p>
    <a href="{{ route('notes.index') }}" class="btn gray">Kembali</a>
    <a href="{{ route('notes.edit', $note) }}" class="btn green">Edit</a>
@endsection

@extends('layouts.app')
@section('title', 'Daftar Catatan')
@section('content')
    <h1>Daftar Catatan</h1>
    <div class="bar">
        <a href="{{ route('notes.create') }}" class="btn">+ Tambah Catatan</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Dibuat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($notes as $note)
                <tr>
                    <td>{{ $notes->firstItem() + $loop->index }}</td>
                    <td>{{ $note->title }}</td>
                    <td><span class="badge">{{ $note->category }}</span></td>
                    <td>{{ $note->created_at->format('d M Y') }}</td>
                    <td class="actions">
                        <a href="{{ route('notes.show', $note) }}" class="btn gray">Lihat</a>
                        <a href="{{ route('notes.edit', $note) }}" class="btn green">Edit</a>
                        <form class="inline" method="POST" action="{{ route('notes.destroy', $note) }}"
                            onsubmit="return confirm('Hapus catatan ini?')">
                            @csrf @method('DELETE')
                            <button class="btn red">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Belum ada catatan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div style="margin-top:16px;">{{ $notes->links() }}</div>
@endsection
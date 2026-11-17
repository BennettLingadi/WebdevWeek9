@csrf
<label for="title">Judul</label>
<input type="text" id="title" name="title" value="{{ old('title', $note->title ?? '') }}">
@error('title') <div class="error">{{ $message }}</div> @enderror

<label for="category">Kategori</label>
@php $cat = old('category', $note->category ?? 'Umum'); @endphp
<select id="category" name="category">
    @foreach (['Umum', 'Kuliah', 'Pribadi', 'Kerja'] as $c)
        <option value="{{ $c }}" @selected($cat === $c)>{{ $c }}</option>
    @endforeach
</select>
@error('category') <div class="error">{{ $message }}</div> @enderror

<label for="content">Isi</label>
<textarea id="content" name="content" rows="6">{{ old('content', $note->content ?? '') }}</textarea>
@error('content') <div class="error">{{ $message }}</div> @enderror

<div style="margin-top:16px; display:flex; gap:8px;">
    <button class="btn">Simpan</button>
    <a href="{{ route('notes.index') }}" class="btn gray">Batal</a>
</div>

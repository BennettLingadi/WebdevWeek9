# Catatan CRUD (Laravel 12)

Project Laravel sederhana: 1 tabel (`notes`) dengan CRUD lengkap, pencarian judul, dan pagination.

## Cara menjalankan

Syarat: PHP >= 8.2, Composer, ekstensi `sqlite3`/`pdo_sqlite`.

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

Buka http://127.0.0.1:8000

## Struktur penting

- `database/migrations/2026_11_17_000000_create_notes_table.php` – tabel `notes`
- `app/Models/Note.php` – model
- `app/Http/Controllers/NoteController.php` – index, create, store, show, edit, update, destroy
- `routes/web.php` – `Route::resource('notes', ...)`
- `resources/views/notes/*` – tampilan Blade (tanpa perlu npm/Vite)

## Pakai MySQL?

Ubah `.env`:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=catatan_crud
DB_USERNAME=root
DB_PASSWORD=
```
lalu buat database-nya dan jalankan `php artisan migrate --seed`.

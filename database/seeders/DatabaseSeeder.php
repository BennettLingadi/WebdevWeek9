<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Note::insert([
            ['title' => 'Belajar Laravel', 'category' => 'Kuliah', 'content' => 'Pelajari routing, controller, dan Eloquent.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Belanja bulanan', 'category' => 'Pribadi', 'content' => 'Beras, telur, kopi.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Ide project', 'category' => 'Umum', 'content' => 'Aplikasi pencatat keuangan sederhana.', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

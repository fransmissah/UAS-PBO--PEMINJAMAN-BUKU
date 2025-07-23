<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Laravel for Beginners',
            'author' => 'Taylor Otwell',
            'publisher' => 'Laravel Publishing',
            'year' => 2023,
            'stock' => 10,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Borrowing;
use App\Models\Book;
use Carbon\Carbon;

class BorrowingSeeder extends Seeder
{
    public function run(): void
    {
        $book = Book::first(); // ambil data buku pertama yang sudah dibuat

        if ($book) {
            Borrowing::create([
                'book_id' => $book->id,
                'borrower_name' => 'Annette',
                'borrow_date' => Carbon::now()->subDays(2),
                'return_date' => null,
                'status' => 'Borrowed',
            ]);
        }
    }
}

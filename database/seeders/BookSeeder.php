<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Book;
use App\Models\Bookshelf;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            "title" => "To Many Losing Heroine",
            "author" => "Sasaki",
            "year" => 2023,
            "publisher" => "mangaDex",
            "city" => "Nihon",
            "cover" => "Cover A",
            "bookshelf_id" => 1,
        ]);
    }
}

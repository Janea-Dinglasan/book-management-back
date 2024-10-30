<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Book::create([
            'title' => 'Book1',
            'author' => 'Author1',
            'published_year' => 2020,
            'genre' => 'Genre1',
            'description' => 'This book is for ages 18 and above.'
        ]);

        Book::create([
            'title' => 'Book2',
            'author' => 'Author2',
            'published_year' => 2021,
            'genre' => 'Genre2',
            'description' => 'This is an educational book suitable for all ages.'
        ]);

        Book::create([
            'title' => 'Book3',
            'author' => 'Author3',
            'published_year' => 2022,
            'genre' => 'Genre3',
            'description' => 'This book provides insights into advanced technologies.'
        ]);
    }
}

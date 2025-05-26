<?php

namespace Database\Seeders;

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
        $books = [
            [
                'title' => 'Book 1',
                'author' => 'Author 1',
                'price' => 10.99,
                'category_id' => 1
            ],
            [
                'title' => 'Book 2',
                'author' => 'Author 2',
                'price' => 15.99,
                'category_id' => 2
            ],
            [
                'title' => 'Book 3',
                'author' => 'Author 3',
                'price' => 20.99,
                'category_id' => 1
            ],
            [
                'title' => 'Book 4',
                'author' => 'Author 4',
                'price' => 25.99,
                'category_id' => 1
            ],
            [
                'title' => 'Book 5',
                'author' => 'Author 5',
                'price' => 30.99,
                'category_id' => 2
            ]
            ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}

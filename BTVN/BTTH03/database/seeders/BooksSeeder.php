<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            ['id' => 1, 'title' => 'Clean Code', 'author' => 'Robert C. Martin', 'publication_year' => 2008, 'genre' => 'Lập trình', 'library_id' => 1],
            ['id' => 2, 'title' => 'The Pragmatic Programmer', 'author' => 'Andrew Hunt, David Thomas', 'publication_year' => 1999, 'genre' => 'Lập trình', 'library_id' => 2],
            ['id' => 3, 'title' => 'The Art of Computer Programming', 'author' => 'Donald E. Knuth', 'publication_year' => 1968, 'genre' => 'Khoa học máy tính', 'library_id' => 3],
            ['id' => 4, 'title' => 'Introduction to Algorithms', 'author' => 'Thomas H. Cormen, Charles E. Leiserson', 'publication_year' => 2009, 'genre' => 'Khoa học máy tính', 'library_id' => 4],
            ['id' => 5, 'title' => 'Design Patterns', 'author' => 'Erich Gamma, Richard Helm, Ralph Johnson, John Vlissides', 'publication_year' => 1994, 'genre' => 'Lập trình', 'library_id' => 5],
        ]);
    }
}

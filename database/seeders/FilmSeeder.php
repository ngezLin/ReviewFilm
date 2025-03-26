<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    public function run()
    {
        DB::table('films')->insert([
            [
                'title' => 'Film 1',
                'director' => 'director 1',
                'genre' => 'romance',
                'release_date' => '2023-01-20',
            ],
            [
                'title' => 'Film 2',
                'director' => 'director 2',
                'genre' => 'action',
                'release_date' => '2021-02-29',
            ],
            [
                'title' => 'Film 3',
                'director' => 'director 3',
                'genre' => 'romance',
                'release_date' => '2003-06-17',
            ],
        ]);
    }
}

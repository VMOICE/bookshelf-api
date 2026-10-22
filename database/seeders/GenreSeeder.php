<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();

        $genres = [
            ['name' => 'Fantasy',         'description' => 'Magic, mythical creatures and epic quests.'],
            ['name' => 'Science Fiction', 'description' => 'Futuristic technology, space travel and speculative worlds.'],
            ['name' => 'Romance',         'description' => 'Stories centered on relationships and emotional journeys.'],
            ['name' => 'Mystery',         'description' => 'Crimes, detectives and puzzles waiting to be solved.'],
        ];

        foreach ($genres as $genre) {
            DB::table('genres')->insert($genre + [
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
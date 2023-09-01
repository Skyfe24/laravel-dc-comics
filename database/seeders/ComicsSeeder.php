<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics');
        foreach ($comics as $comic) {
            $comic['artists'] = implode(', ', $comic['artists']) . '.';
            $comic['writers'] = implode(', ', $comic['writers']) . '.';
            $db_Comic = new Comic();
            $db_Comic->fill($comic);
            $db_Comic->save();
        }
    }
}

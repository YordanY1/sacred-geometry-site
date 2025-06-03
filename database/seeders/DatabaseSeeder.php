<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\TopicSeeder;
use Database\Seeders\CourseSeeder;
use Database\Seeders\BookSeeder;
use Database\Seeders\GalleryImageSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // PostSeeder::class,
            // TopicSeeder::class,
            // CourseSeeder::class,
            // BookSeeder::class,
            // GalleryImageSeeder::class,

        ]);
    }
}

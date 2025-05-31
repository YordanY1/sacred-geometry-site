<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GalleryImage;

class GalleryImageSeeder extends Seeder
{
    public function run(): void
    {
        GalleryImage::insert([
            ['title' => 'Цветна мандала', 'image' => 'courses/sacred_geometry_course.png', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Геометрични форми', 'image' => 'courses/sacred_geometry_course.png', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Звезда на живота', 'image' => 'courses/sacred_geometry_course.png', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Свещена спирала', 'image' => 'courses/sacred_geometry_course.png', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

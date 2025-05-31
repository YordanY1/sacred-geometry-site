<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::insert([
            [
                'title' => 'Сакрална Геометрия - Въведение',
                'slug' => 'sacred-geometry-intro',
                'description' => 'Курс за основите на сакралната геометрия, форми и символика.',
                'content' => 'Това е пълен курс, който разглежда свещената геометрия и нейните проявления в природата, изкуството и архитектурата.',
                'image' => 'courses/sacred_geometry_course.png',
                'video_path' => 'courses/sacred_geometry.mp4',
                'price' => 49.00,
                'link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Съзнание и Матрица на Реалността',
                'slug' => 'consciousness-matrix',
                'description' => 'Изследване на съзнанието, наблюдателя и вътрешната реалност.',
                'content' => 'Този курс ще ви запознае с връзката между съзнание, вибрация и реалност чрез гледни точки от науката и езотериката.',
                'image' => 'courses/sacred_geometry_course.png',
                'video_path' => 'courses/sacred_geometry.mp4',
                'price' => 59.00,
                'link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

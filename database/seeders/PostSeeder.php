<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Тайните на Фибоначи в природата',
                'slug' => Str::slug('Тайните на Фибоначи в природата'),
                'excerpt' => 'Открийте числовата магия в растенията, животните и структурата на ДНК.',
                'content' => '<p>Последователността на Фибоначи се среща в множество природни явления — от спиралите на охлювите до разпределението на листата по стъблото.</p>',
                'image' => 'courses/sacred_geometry_course.png',
            ],
            [
                'title' => 'Сакрална геометрия и архитектура',
                'slug' => Str::slug('Сакрална геометрия и архитектура'),
                'excerpt' => 'Как древните цивилизации използвали свещената геометрия в строителството.',
                'content' => '<p>Пирамидите в Египет, гръцките храмове и готическите катедрали всички използват сакрални пропорции и златно сечение.</p>',
                'image' => 'courses/sacred_geometry_course.png',
            ],
            [
                'title' => 'Числото 108 и неговата космическа символика',
                'slug' => Str::slug('Числото 108 и неговата космическа символика'),
                'excerpt' => '108 — магическо число в йога, хиндуизма и астрономията.',
                'content' => '<p>Много култури придават свещено значение на числото 108. То се среща в мантри, броеници, планетарни разстояния и математически зависимости.</p>',
                'image' => 'courses/sacred_geometry_course.png',
            ],
        ];

        foreach ($posts as $post) {
            Post::create(array_merge($post, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}

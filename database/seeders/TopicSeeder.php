<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Topic;


class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Topic::insert([
            [
                'title' => 'Свещена Геометрия',
                'slug' => 'sveshtena-geometriya',
                'icon' => 'fas fa-draw-polygon',
                'description' => 'Символизъм, златно сечение, сакрално конструиране и хармония.',
            ],
            [
                'title' => 'Осъзнати Сънища',
                'slug' => 'osoznati-sanishta',
                'icon' => 'fas fa-moon',
                'description' => 'Сънуване, осъзнаване, техники и преживявания от съня.',
            ],
            [
                'title' => 'Херметизъм и Алхимия',
                'slug' => 'hermetizam-i-alhimiya',
                'icon' => 'fas fa-flask',
                'description' => 'Принципи на херметизма, алхимични процеси и трансформация.',
            ],
            [
                'title' => 'Археология и История',
                'slug' => 'arheologiya-i-istoriya',
                'icon' => 'fas fa-landmark',
                'description' => 'Древни цивилизации, археологически находки и исторически загадки.',
            ],
            [
                'title' => 'Вортекс Математика',
                'slug' => 'vortex-matematika',
                'icon' => 'fas fa-infinity',
                'description' => 'Математически модели, енергийни полета и тороидални структури.',
            ],
            [
                'title' => 'Наука',
                'slug' => 'nauka',
                'icon' => 'fas fa-atom',
                'description' => 'Астрономия, физика, химия, звук, ДНК, минерали, биология, земята.',
            ],
        ]);
    }
}

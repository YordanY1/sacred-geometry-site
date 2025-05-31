<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::insert([
            [
                'title' => 'Златното сечение: Тайният код на природата',
                'price' => 19.90,
                'slug' => 'golden-ratio',
                'author' => 'Марио Ливио',
                'description' => 'Книга, която разкрива как златното сечение присъства в изкуството, архитектурата и природата.',
                'content' => 'Златното сечение е числова хармония, която се среща в архитектурата, музиката, растежа на растенията и дори в структурата на ДНК...',
                'cover_image' => 'books/golden-ratio-cover.jpg',
                'back_image' => 'books/golden-ratio-back.jpg',
            ],
            [
                'title' => 'Съзнанието: Последната граница',
                'price' => 19.90,
                'slug' => 'consciousness-frontier',
                'author' => 'Дейвид Чалмърс',
                'description' => 'Изследване на природата на съзнанието от философска и научна гледна точка.',
                'content' => 'Какво е съзнанието и защо въобще съществува? Тази книга предлага теории, примери и размисли за феномена, който ни прави хора...',
                'cover_image' => 'books/golden-ratio-cover.jpg',
                'back_image' => 'books/golden-ratio-back.jpg',
            ],
            [
                'title' => 'Кибалион: Трите инициатива',
                'price' => 19.90,
                'slug' => 'kybalion',
                'author' => 'Анонимни херметици',
                'description' => 'Основополагащ херметичен труд, който обяснява принципите на ума, причинността и вибрацията.',
                'content' => '„Кибалион“ описва седемте херметични принципа, които управляват реалността, включително Закон за причината и следствието, вибрацията и ментализма...',
                'cover_image' => 'books/golden-ratio-cover.jpg',
                'back_image' => 'books/golden-ratio-back.jpg',
            ],
            [
                'title' => 'Вортекс математика и тороидалната енергия',
                'price' => 19.90,
                'slug' => 'vortex-mathematics',
                'author' => 'Марк Родин',
                'description' => 'Разкриване на математическите закономерности в енергията, движението и живота.',
                'content' => 'Вортекс математиката описва модели на енергия, които се движат по тороидални пътища. С числата 1, 2, 4, 8, 7 и 5 като ключове, тази наука предлага нов начин на мислене...',
                'cover_image' => 'books/golden-ratio-cover.jpg',
                'back_image' => 'books/golden-ratio-back.jpg',
            ],
            [
                'title' => 'Фрактали и скритите модели на реалността',
                'price' => 19.90,
                'slug' => 'fractals-and-reality',
                'author' => 'Беноа Манделброт',
                'description' => 'Фракталната геометрия и нейната роля в природата, изкуството и човешкото съзнание.',
                'content' => 'Фракталите са навсякъде – в листата, облаците, кръвоносните съдове и дори в икономическите модели. Манделброт описва как самоподобните структури са универсален принцип...',
                'cover_image' => 'books/golden-ratio-cover.jpg',
                'back_image' => 'books/golden-ratio-back.jpg',
            ],
        ]);
    }
}

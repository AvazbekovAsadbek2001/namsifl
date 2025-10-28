<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $data = [
            [
                'en' => 'News',
                'ru' => 'Новости',
                'uz' => 'Yangilik'
            ],
            [
                'en' => 'Announcement',
                'ru' => 'Объявление',
                'uz' => 'E`lon'
            ],
            [
                'en' => 'Anti-Corruption',
                'ru' => 'Борьба с коррупцией',
                'uz' => 'Korrupsiyaga qarshi kurash'
            ],
        ];

        foreach ($data as $category) {
            Category::create([
                'name' => json_encode($category),
            ]);
        }

    }
}

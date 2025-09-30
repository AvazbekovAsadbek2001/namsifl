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
                'en' => 'new',
                'ru' => 'новости',
                'uz' => 'yangilik'
            ],
            [
                'en' => 'announcement',
                'ru' => 'объявление',
                'uz' => 'e`lon'
            ]
        ];

        foreach ($data as $category) {
            Category::create([
                'name' => json_encode($category),
            ]);
        }

    }
}

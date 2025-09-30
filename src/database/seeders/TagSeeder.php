<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'en' => 'sport',
                'uz' => 'sport',
                'ru' => 'спорт',
            ],
            [
                'en' => 'cultural',
                'uz' => 'madaniy',
                'ru' => 'культурный',
            ],
            [
                'en' => 'scientific',
                'uz' => 'ilmiy',
                'ru' => 'научный'
            ]
        ];

        foreach ($data as $tag) {
            Tag::create([
                'name' => json_encode($tag),
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Uzbek', 'code' => 'uz','flag' => 'langs/uz.png'],
            ['name' => 'Russian', 'code' => 'ru','flag' => 'langs/ru.png'],
            ['name' => 'English', 'code' => 'en','flag' => 'langs/us.png']
        ];

        foreach ($data as $item) {
            \App\Models\Lang::create($item);
        }
    }
}

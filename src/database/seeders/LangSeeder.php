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
            ['name' => 'Uzbek', 'code' => 'uz'],
            ['name' => 'Russian', 'code' => 'ru'],
            ['name' => 'English', 'code' => 'en']
        ];

        foreach ($data as $item) {
            \App\Models\Lang::create($item);
        }
    }
}

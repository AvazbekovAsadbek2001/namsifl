<?php

namespace Database\Seeders;

use App\Models\Nation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['uz' => "O'zbek", 'ru' => "Узбек", 'en' => "Uzbek"],
            ['uz' => "Qozoq", 'ru' => "Казах", 'en' => "Kazakh"],
            ['uz' => "Qirg'iz", 'ru' => "Киргиз", 'en' => "Kyrgyz"],
            ['uz' => "Tojik", 'ru' => "Таджик", 'en' => "Tajik"],
            ['uz' => "Turkman", 'ru' => "Туркмен", 'en' => "Turkmen"],
            ['uz' => "Rus", 'ru' => "Русский", 'en' => "Russian"],
            ['uz' => "Afg'on", 'ru' => "Афганец", 'en' => "Afghan"],
            ['uz' => "Uyg'ur", 'ru' => "Уйгур", 'en' => "Uyghur"],
            ['uz' => "Tatar", 'ru' => "Татар", 'en' => "Tatar"],
            ['uz' => "Qoraqalpoq", 'ru' => "Каракалпак", 'en' => "Karakalpak"],
            ['uz' => "Ingliz", 'ru' => "Англичанин", 'en' => "English"],
        ];

        foreach ($data as $item) {
            Nation::create($item);
        }
    }
}

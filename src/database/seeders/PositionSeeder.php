<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = [
            ['uz' => "Rektor", 'ru' => "Ректор", 'en' => "Rector"],
            ['uz' => "Prorektor", 'ru' => "Проректор", 'en' => "Vice-Rector"],
            ['uz' => "Dekan", 'ru' => "Декан", 'en' => "Dean"],
            ['uz' => "Zamdekan", 'ru' => "Зам. декана", 'en' => "Vice-Dean"],
            ['uz' => "Kafedra mudiri", 'ru' => "Заведующий кафедрой", 'en' => "Head of Department"],
            ['uz' => "O‘qituvchi", 'ru' => "Преподаватель", 'en' => "Lecturer"],
            ['uz' => "Dotsent", 'ru' => "Доцент", 'en' => "Associate Professor"],
            ['uz' => "Professor", 'ru' => "Профессор", 'en' => "Professor"],
            ['uz' => "Ilmiy xodim", 'ru' => "Научный сотрудник", 'en' => "Researcher"],
            ['uz' => "Laboratoriya mudiri", 'ru' => "Заведующий лабораторией", 'en' => "Lab Manager"],
            ['uz' => "Bosh hisobchi", 'ru' => "Главный бухгалтер", 'en' => "Chief Accountant"],
            ['uz' => "Bosh kitobxona", 'ru' => "Главный библиотекарь", 'en' => "Chief Librarian"],
            ['uz' => "Ma’muriyat xodimi", 'ru' => "Сотрудник администрации", 'en' => "Administrative Staff"],
            ['uz' => "Talabalar maslahatchisi", 'ru' => "Консультант студентов", 'en' => "Student Advisor"],
            ['uz' => "Xodim", 'ru' => "Сотрудник", 'en' => "Staff Member"],
            ['uz' => "Kassir", 'ru' => "Кассир", 'en' => "Cashier"],
            ['uz' => "Kutubxona xodimi", 'ru' => "Библиотекарь", 'en' => "Librarian"],
            ['uz' => "Texnik xodim", 'ru' => "Технический сотрудник", 'en' => "Technician"],
            ['uz' => "Kadrlar bo‘limi xodimi", 'ru' => "Сотрудник отдела кадров", 'en' => "HR Staff"],
        ];

        foreach ($positions as $item) {
            Position::create([
                'title' => json_encode($item, true),
            ]);
        }

    }
}

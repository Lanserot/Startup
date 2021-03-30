<?php

namespace Database\Seeders;

use App\Models\Speciality;
use Illuminate\Database\Seeder;

class SpecialitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Speciality::insert(['name' => "Не указано"]);
        Speciality::insert(['name' => "Разработчик"]);
        Speciality::insert(['name' => "Дизайнер"]);
        Speciality::insert(['name' => "Менеджер"]);
        Speciality::insert(['name' => "Ментор"]);
        Speciality::insert(['name' => "Маркетолог"]);
        Speciality::insert(['name' => "Юрист"]);
        Speciality::insert(['name' => "Инвестор"]);
        Speciality::insert(['name' => "Другое"]);
    }
}

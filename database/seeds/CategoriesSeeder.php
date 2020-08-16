<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getData());
    }

    public function getData() : array
    {
        return [
            ['category' => 'Фильмы'],
            ['category' => 'Путешествия'],
            ['category' => 'Дизайн'],
            ['category' => 'IT'],
            ['category' => 'Интерьер'],
            ['category' => 'Наука'],
            ['category' => 'Технологии'],
            ['category' => 'Искусство'],
            ['category' => 'Спорт'],
            ['category' => 'Здоровье'],
        ];
    }
}

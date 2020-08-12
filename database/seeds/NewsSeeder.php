<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    private function getData(): array
    {
        $faker = Faker\Factory::create('ru_RU');

        $data = [];

        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'title' => $faker->sentence(rand(3, 10)),
                'text' => $faker->realText(rand(100, 200)),
                'is_private' => (boolean)(rand(0, 1)),
            ];
        }
        return $data;
    }
}

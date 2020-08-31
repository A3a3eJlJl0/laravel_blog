<?php

use Faker\Factory;
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
        $faker = Factory::create('ru_RU');

        $data = [];

        $categories = DB::table('categories')->get();
        $sources = DB::table('sources')->get();
        foreach ($categories as $category) {
            for ($i = 0; $i < 10; $i++) {
                $source = $sources->random();
                $data[] = [
                    'category_id' => $category->id,
                    'source_id' => $source->id,
                    'title' => $faker->sentence(rand(3, 10)),
                    'text' => $faker->realText(rand(100, 200))
                ];
            }
        }
        return $data;
    }
}

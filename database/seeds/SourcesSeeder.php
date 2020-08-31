<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {
        DB::table('sources')->insert($this->getData());
    }

    public function getData() : array
    {
        $data = [];

        $faker = Factory::create('ru_RU');

        for($i = 0; $i < 10; $i++) {
            $data[] = ['source' => $faker->unique()->company];
        }

        return $data;
    }
}

<?php

use Illuminate\Database\Seeder;
use App\World;

class WorldTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        World::create(
            [
                'name' => 'Test World 1'
            ]
        );

        World::create(
            [
                'name' => 'Test World 2'
            ]
        );
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Region;

class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region::create(
            [
                'world_id'        => 1,
                'name'            => 'Test Region 1',
                'progress_points' => json_encode([3, 6, 9])
            ]
        );

        Region::create(
            [
                'world_id' => 1,
                'name'     => 'Test Region 2'
            ]
        );
    }
}

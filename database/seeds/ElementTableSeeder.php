<?php

use Illuminate\Database\Seeder;
use App\Element;

class ElementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Locations
        Element::create(
            [
                'region_id' => 1,
                'category'  => Element::CATEGORY_LOCATION,
                'type'      => Element::TYPE_COMPLETE,
                'name'      => 'Test Location 1',
                'unique'    => 1,
                'order'     => 6
            ]
        );

        Element::create(
            [
                'region_id' => 1,
                'category'  => Element::CATEGORY_LOCATION,
                'type'      => Element::TYPE_CUSTOM,
                'name'      => 'Test Location 2',
                'unique'    => 0,
                'order'     => 5
            ]
        );

        Element::create(
            [
                'region_id' => 1,
                'category'  => Element::CATEGORY_LOCATION,
                'type'      => Element::TYPE_EXPECTED,
                'name'      => 'Test Location 3',
                'unique'    => 1,
                'order'     => 4
            ]
        );

        Element::create(
            [
                'region_id' => 1,
                'category'  => Element::CATEGORY_LOCATION,
                'type'      => Element::TYPE_NONE,
                'name'      => 'Test Location 4',
                'unique'    => 0,
                'order'     => 3
            ]
        );

        Element::create(
            [
                'region_id' => 1,
                'category'  => Element::CATEGORY_LOCATION,
                'type'      => Element::TYPE_RANDOM,
                'name'      => 'Test Location 5',
                'unique'    => 0,
                'order'     => 2
            ]
        );

        Element::create(
            [
                'region_id' => 1,
                'category'  => Element::CATEGORY_LOCATION,
                'type'      => Element::TYPE_RANDOM,
                'name'      => 'Test Disabled',
                'unique'    => 0,
                'order'     => 1,
                'disabled'  => true
            ]
        );

        Element::create(
            [
                'region_id' => 1,
                'category'  => Element::CATEGORY_LOCATION,
                'type'      => Element::TYPE_SPECIAL,
                'name'      => 'Test Location 6',
                'unique'    => 0,
                'order'     => 0
            ]
        );

        // Encounters
        Element::create(
            [
                'region_id' => 1,
                'category'  => Element::CATEGORY_ENCOUNTER,
                'type'      => Element::TYPE_SPECIAL,
                'name'      => 'Test Encounter 1',
                'unique'    => 0,
                'order'     => 6
            ]
        );

        Element::create(
            [
                'region_id' => 1,
                'category'  => Element::CATEGORY_ENCOUNTER,
                'type'      => Element::TYPE_RANDOM,
                'name'      => 'Test Encounter 2',
                'unique'    => 1,
                'order'     => 5
            ]
        );

        Element::create(
            [
                'region_id' => 1,
                'category'  => Element::CATEGORY_ENCOUNTER,
                'type'      => Element::TYPE_NONE,
                'name'      => 'Test Encounter 3',
                'unique'    => 0,
                'order'     => 4
            ]
        );

        Element::create(
            [
                'region_id' => 1,
                'category'  => Element::CATEGORY_ENCOUNTER,
                'type'      => Element::TYPE_CUSTOM,
                'name'      => 'Test Encounter 4',
                'unique'    => 0,
                'order'     => 3
            ]
        );

        Element::create(
            [
                'region_id' => 1,
                'category'  => Element::CATEGORY_ENCOUNTER,
                'type'      => Element::TYPE_EXPECTED,
                'name'      => 'Test Disabled',
                'unique'    => 1,
                'order'     => 2,
                'disabled'  => true
            ]
        );

        Element::create(
            [
                'region_id' => 1,
                'category'  => Element::CATEGORY_ENCOUNTER,
                'type'      => Element::TYPE_EXPECTED,
                'name'      => 'Test Encounter 5',
                'unique'    => 1,
                'order'     => 1
            ]
        );

        // Objects
        Element::create(
            [
                'region_id' => 1,
                'category'  => Element::CATEGORY_OBJECT,
                'type'      => Element::TYPE_SPECIAL,
                'name'      => 'Test Object 1',
                'unique'    => 0,
                'order'     => 0
            ]
        );

        Element::create(
            [
                'region_id' => 1,
                'category'  => Element::CATEGORY_OBJECT,
                'type'      => Element::TYPE_SPECIAL,
                'name'      => 'Test Disabled',
                'unique'    => 0,
                'order'     => 1,
                'disabled'  => true
            ]
        );

        Element::create(
            [
                'region_id' => 1,
                'category'  => Element::CATEGORY_OBJECT,
                'type'      => Element::TYPE_RANDOM,
                'name'      => 'Test Object 2',
                'unique'    => 0,
                'order'     => 2
            ]
        );

        Element::create(
            [
                'region_id' => 1,
                'category'  => Element::CATEGORY_OBJECT,
                'type'      => Element::TYPE_NONE,
                'name'      => 'Test Object 3',
                'unique'    => 1,
                'order'     => 3
            ]
        );

        Element::create(
            [
                'region_id' => 1,
                'category'  => Element::CATEGORY_OBJECT,
                'type'      => Element::TYPE_CUSTOM,
                'name'      => 'Test Object 4',
                'unique'    => 0,
                'order'     => 4
            ]
        );

        Element::create(
            [
                'region_id' => 1,
                'category'  => Element::CATEGORY_OBJECT,
                'type'      => Element::TYPE_EXPECTED,
                'name'      => 'Test Object 5',
                'unique'    => 0,
                'order'     => 5
            ]
        );
    }
}

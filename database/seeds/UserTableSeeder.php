<?php

use Illuminate\Database\Seeder;
use \App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name'     => 'Test User 1',
                'email'    => 'user1@email.com',
                'password' => Hash::make('password')
            ]
        );
    }
}

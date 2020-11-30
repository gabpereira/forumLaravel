<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'first_name' => 'Gabriel',
                'last_name' => 'Pereira',
                'pseudo' => 'Gecxio',
                'role_id' => 1,
            ],
            [
                'first_name' => 'Loïc',
                'last_name' => 'Meyer',
                'pseudo' => 'Narwix',
                'role_id' => 1,
            ],
            [
                'first_name' => 'Gwen',
                'last_name' => 'Ansermoz',
                'pseudo' => 'Elaxe',
                'role_id' => 1,
            ],
            [
                'first_name' => 'Pascal',
                'last_name' => 'Hurny',
                'pseudo' => 'PHY',
                'role_id' => 2,
            ],
            [
                'first_name' => 'Xavier',
                'last_name' => 'Carrel',
                'pseudo' => 'XCL',
                'role_id' => 2,
            ]
        ];
        foreach($users as $user) User::create($user);
    }
}

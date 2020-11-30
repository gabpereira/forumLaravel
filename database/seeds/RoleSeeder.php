<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'Elève'
            ],
            [
                'name' => 'Professeur'
            ]
        ];
        foreach($roles as $role) Role::create($role);
    }
}

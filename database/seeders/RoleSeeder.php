<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // delete all previous records
        Role::truncate();

        Role::create([
            'id' => User::USER,
            'name' => 'user',
        ]);

        Role::create([
            'id' => User::ADMIN_USER,
            'name' => 'admin',
        ]);
    }
}

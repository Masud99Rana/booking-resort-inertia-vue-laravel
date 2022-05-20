<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_password = 12345678;

        $user_count = 5;
        $admin_count = 5;


        // delete all previous records
        // User::truncate();

        // Role Admin
        for ($i = 1; $i <= $admin_count; $i++) {
            $name = "admin{$i}";

            User::create([
                'name' => $name,
                'email' => "{$name}@gmail.com",
                'role_id' => User::ADMIN_USER,
                'password' => Hash::make($default_password)
            ]);
        }

        // Role User
        for ($i = 1; $i <= $user_count; $i++) {
            $name = "user{$i}";

            User::create([
                'name' => $name,
                'email' => "{$name}@gmail.com",
                'password' => Hash::make($default_password)
            ]);
        }
    }
}

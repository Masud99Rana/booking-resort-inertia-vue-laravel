<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Resort;
use Illuminate\Database\Seeder;

class ResortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resort_count = 20;

        // delete all previous records
        // Resort::truncate();

        $admin = User::where('role_id', 1)->first();

        // Role User
        for ($i = 1; $i <= $resort_count; $i++) {
            $title = "Resort no {$i}";

            Resort::create([
                'admin_id' => $admin->id,
                'title' => $title,
                'location' => 'Savar, Dhaka',
                'description' => "description-{$i} Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            ]);
        }
    }
}

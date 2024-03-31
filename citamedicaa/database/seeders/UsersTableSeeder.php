<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Eduardo',
            'email' => 'Dani@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password
            
            'cedula' => '20160915',
            'address' => 'Av Panama 1013',
            'phone' => '987456321',
            'role' => 'admin',
        ]);
        User::factory()
            ->count(50)
            ->create();
    }
}
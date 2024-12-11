<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'usertype' => 'admin',
            'password' => '$2y$12$PD/YUNMbnvOiyAAfsvwt0e4d0TmkP6YFZT6ZgyrcsMFcBQVZYtGJG',
        ]);
    }
}

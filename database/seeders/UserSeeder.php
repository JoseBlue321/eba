<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'=>'jose apaza saavedra',
            'email'=>'jos123apaza@gmail.com',
            'password'=>bcrypt('9087013'),
        ]);
    }
}

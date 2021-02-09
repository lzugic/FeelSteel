<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        User::create([
            'name'=> 'Luka',
            'email'=> 'lzugic@gmail.com',
            'password'=> Hash::make('madara905')
        ]);
        User::create([
            'name'=> 'Admin',
            'email'=> 'admin@admin.com',
            'password'=> Hash::make('madara905')
        ]);
        User::create([
            'name'=> 'User',
            'email'=> 'user@user.com',
            'password'=> Hash::make('madara905')
        ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                'name' => 'Admin Satu',
                'username' => 'admin1',
                'address' => 'Demo Street 123, Demo City 04312, NJ',
                'phone_number' => '+800 - 12 12 23 52',
                'email' => 'admin1@gmail.com',
                'birth_date' => '1999-01-01',
                'password' => \Hash::make('admin12345'),
                'level_user'=>'1',
            ],
        ]);
    }
}

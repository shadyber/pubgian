<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->insert([
            'name' => 'Super Admin',
            'email' => 'admin@pubgian.test',

            'password' => bcrypt('password'),
            'email_verified_at' =>'2021-11-11 11:11:11',

        ]);
    }
}

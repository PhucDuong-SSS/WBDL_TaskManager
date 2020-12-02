<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => Str::random(10),
            'name' => Str::random(20),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make(123456),
            'status' => '1',
            'role' => '1',
        ]);
    }
}

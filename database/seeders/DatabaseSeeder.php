<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(30)->create();



        DB::table('users')->insert([
            'code' => 'ADMIN',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1'),
            'updated_at' => now()
        ]);
    }
}
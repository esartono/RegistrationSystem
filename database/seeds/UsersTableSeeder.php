<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
            'name' => 'Admin',
            'email' => 'admin@eko.local',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'role' => 'admin',
            'verified' => true,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' => 'User 1',
            'email' => 'user1@eko.local',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'role' => 'user',
            'verified' => false,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' => 'User 2',
            'email' => 'user2@eko.local',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'role' => 'user',
            'verified' => false,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' => 'User 3',
            'email' => 'user3@eko.local',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'role' => 'user',
            'verified' => false,
            'created_at' => now(),
            'updated_at' => now()
        ]
        ]);

    }
}

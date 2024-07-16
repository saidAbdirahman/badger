<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = User::create([
            'name' => 'said',
            'email' => 'said@gmail.com',
            'password' => bcrypt('123456'),

        ]);
        $user->createToken('said')->plainTextToken;

        $user::factory()->count(5)->create();
    }
}

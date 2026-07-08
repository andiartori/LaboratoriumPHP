<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class ChirpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (User::count() < 3) {
            User::Create([
                'name' => 'john Doe',
                'email' => 'johnDoe@emailtest.com',
                'password' => bcrypt('password123'),
            ]);

            User::Create([
                'name' => 'Hohn Roe',
                'email' => 'hohnRoe@emailtest.com',
                'password' => bcrypt('password123'),
            ]);

            User::Create([
                'name' => 'Hamel Dorgan',
                'email' => 'hamelDorgan@emailTest.com',
                'password' => bcrypt('password123'),
            ]);

            $chirps = [
                'Wow this is interesting',
                'NeoVim Jurney has just begun',
                'Testing Neovim! ',
                'Try Not to lough!'];

            $users = User::all();

            foreach ($chirps as $chirp) {
                $users->random()->chirps()->create([
                    'message' => $chirp,
                    'created_at' => now()->subMinutes(rand(5, 1400)),
                ]);
            }

        }
    }
}

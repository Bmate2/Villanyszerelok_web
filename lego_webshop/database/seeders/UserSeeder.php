<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        \App\Models\Review::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $users = [
            ['name' => 'Teszt Felhasználó 1', 'email' => 'user1@example.com', 'password' => Hash::make('password1')],
            ['name' => 'Teszt Felhasználó 2', 'email' => 'user2@example.com', 'password' => Hash::make('password2')],
            ['name' => 'Teszt Felhasználó 3', 'email' => 'user3@example.com', 'password' => Hash::make('password3')],
            ['name' => 'Teszt Felhasználó 4', 'email' => 'user4@example.com', 'password' => Hash::make('password4')],
            ['name' => 'Teszt Felhasználó 5', 'email' => 'user5@example.com', 'password' => Hash::make('password5')],
            ['name' => 'Teszt Felhasználó 6', 'email' => 'user6@example.com', 'password' => Hash::make('password6')],
            ['name' => 'Teszt Felhasználó 7', 'email' => 'user7@example.com', 'password' => Hash::make('password7')],
            ['name' => 'Teszt Felhasználó 8', 'email' => 'user8@example.com', 'password' => Hash::make('password8')],
            ['name' => 'Teszt Felhasználó 9', 'email' => 'user9@example.com', 'password' => Hash::make('password9')],
            ['name' => 'Teszt Felhasználó 10', 'email' => 'user10@example.com', 'password' => Hash::make('password10')],
            ['name' => 'Teszt Felhasználó 11', 'email' => 'user11@example.com', 'password' => Hash::make('password11')],
            ['name' => 'Teszt Felhasználó 12', 'email' => 'user12@example.com', 'password' => Hash::make('password12')],
            ['name' => 'Teszt Felhasználó 13', 'email' => 'user13@example.com', 'password' => Hash::make('password13')],
            ['name' => 'Teszt Felhasználó 14', 'email' => 'user14@example.com', 'password' => Hash::make('password13')],
            ['name' => 'Teszt Felhasználó 15', 'email' => 'user15@example.com', 'password' => Hash::make('password15')],
            ['name' => 'Teszt Felhasználó 16', 'email' => 'user16@example.com', 'password' => Hash::make('password16')],
            ['name' => 'Teszt Felhasználó 17', 'email' => 'user17@example.com', 'password' => Hash::make('password17')],
            ['name' => 'Teszt Felhasználó 18', 'email' => 'user18@example.com', 'password' => Hash::make('password18')],
            ['name' => 'Teszt Felhasználó 19', 'email' => 'user19@example.com', 'password' => Hash::make('password19')],
            ['name' => 'Teszt Felhasználó 20', 'email' => 'user20@example.com', 'password' => Hash::make('password20')],
            ['name' => 'Teszt Felhasználó 21', 'email' => 'user21@example.com', 'password' => Hash::make('password21')],
            ['name' => 'Teszt Felhasználó 22', 'email' => 'user22@example.com', 'password' => Hash::make('password22')],
            ['name' => 'Teszt Felhasználó 23', 'email' => 'user23@example.com', 'password' => Hash::make('password23')],
            ['name' => 'Teszt Felhasználó 24', 'email' => 'user24@example.com', 'password' => Hash::make('password24')],
            ['name' => 'Teszt Felhasználó 25', 'email' => 'user25@example.com', 'password' => Hash::make('password25')],
            ['name' => 'Teszt Felhasználó 26', 'email' => 'user26@example.com', 'password' => Hash::make('password26')],
            ['name' => 'Teszt Felhasználó 27', 'email' => 'user27@example.com', 'password' => Hash::make('password27')]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}

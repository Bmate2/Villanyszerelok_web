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
            ['name' => 'Teszt Felhasználó 14', 'email' => 'user14@example.com', 'password' => Hash::make('password14')],
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
            ['name' => 'Teszt Felhasználó 27', 'email' => 'user27@example.com', 'password' => Hash::make('password27')],
            ['name' => 'Teszt Felhasználó 28', 'email' => 'user28@example.com', 'password' => Hash::make('password28')],
            ['name' => 'Teszt Felhasználó 29', 'email' => 'user29@example.com', 'password' => Hash::make('password29')],
            ['name' => 'Teszt Felhasználó 30', 'email' => 'user30@example.com', 'password' => Hash::make('password30')],
            ['name' => 'Teszt Felhasználó 31', 'email' => 'user31@example.com', 'password' => Hash::make('password31')],
            ['name' => 'Teszt Felhasználó 32', 'email' => 'user32@example.com', 'password' => Hash::make('password32')],
            ['name' => 'Teszt Felhasználó 33', 'email' => 'user33@example.com', 'password' => Hash::make('password33')],
            ['name' => 'Teszt Felhasználó 34', 'email' => 'user34@example.com', 'password' => Hash::make('password34')],
            ['name' => 'Teszt Felhasználó 35', 'email' => 'user35@example.com', 'password' => Hash::make('password35')],
            ['name' => 'Teszt Felhasználó 36', 'email' => 'user36@example.com', 'password' => Hash::make('password36')],
            ['name' => 'Teszt Felhasználó 37', 'email' => 'user37@example.com', 'password' => Hash::make('password37')],
            ['name' => 'Teszt Felhasználó 38', 'email' => 'user38@example.com', 'password' => Hash::make('password38')],
            ['name' => 'Teszt Felhasználó 39', 'email' => 'user39@example.com', 'password' => Hash::make('password39')],
            ['name' => 'Teszt Felhasználó 40', 'email' => 'user40@example.com', 'password' => Hash::make('password40')],
            ['name' => 'Teszt Felhasználó 41', 'email' => 'user41@example.com', 'password' => Hash::make('password41')],
            ['name' => 'Teszt Felhasználó 42', 'email' => 'user42@example.com', 'password' => Hash::make('password42')],
            ['name' => 'Teszt Felhasználó 43', 'email' => 'user43@example.com', 'password' => Hash::make('password43')],
            ['name' => 'Teszt Felhasználó 44', 'email' => 'user44@example.com', 'password' => Hash::make('password44')],
            ['name' => 'Teszt Felhasználó 45', 'email' => 'user45@example.com', 'password' => Hash::make('password45')],
            ['name' => 'Teszt Felhasználó 46', 'email' => 'user46@example.com', 'password' => Hash::make('password46')],
            ['name' => 'Teszt Felhasználó 47', 'email' => 'user47@example.com', 'password' => Hash::make('password47')],
            ['name' => 'Teszt Felhasználó 48', 'email' => 'user48@example.com', 'password' => Hash::make('password48')],
            ['name' => 'Teszt Felhasználó 49', 'email' => 'user49@example.com', 'password' => Hash::make('password49')],
            ['name' => 'Teszt Felhasználó 50', 'email' => 'user50@example.com', 'password' => Hash::make('password50')],
    ['name' => 'Teszt Felhasználó 51', 'email' => 'user51@example.com', 'password' => Hash::make('password51')],
    ['name' => 'Teszt Felhasználó 52', 'email' => 'user52@example.com', 'password' => Hash::make('password52')],
    ['name' => 'Teszt Felhasználó 53', 'email' => 'user53@example.com', 'password' => Hash::make('password53')],
    ['name' => 'Teszt Felhasználó 54', 'email' => 'user54@example.com', 'password' => Hash::make('password54')],
    ['name' => 'Teszt Felhasználó 55', 'email' => 'user55@example.com', 'password' => Hash::make('password55')],
    ['name' => 'Teszt Felhasználó 56', 'email' => 'user56@example.com', 'password' => Hash::make('password56')],
    ['name' => 'Teszt Felhasználó 57', 'email' => 'user57@example.com', 'password' => Hash::make('password57')],
    ['name' => 'Teszt Felhasználó 58', 'email' => 'user58@example.com', 'password' => Hash::make('password58')],
    ['name' => 'Teszt Felhasználó 59', 'email' => 'user59@example.com', 'password' => Hash::make('password59')],
    ['name' => 'Teszt Felhasználó 60', 'email' => 'user60@example.com', 'password' => Hash::make('password60')],
    ['name' => 'Teszt Felhasználó 61', 'email' => 'user61@example.com', 'password' => Hash::make('password61')],
    ['name' => 'Teszt Felhasználó 62', 'email' => 'user62@example.com', 'password' => Hash::make('password62')],
    ['name' => 'Teszt Felhasználó 63', 'email' => 'user63@example.com', 'password' => Hash::make('password63')],
    ['name' => 'Teszt Felhasználó 64', 'email' => 'user64@example.com', 'password' => Hash::make('password64')],
    ['name' => 'Teszt Felhasználó 65', 'email' => 'user65@example.com', 'password' => Hash::make('password65')],
    ['name' => 'Teszt Felhasználó 66', 'email' => 'user66@example.com', 'password' => Hash::make('password66')],
    ['name' => 'Teszt Felhasználó 67', 'email' => 'user67@example.com', 'password' => Hash::make('password67')],
    ['name' => 'Teszt Felhasználó 68', 'email' => 'user68@example.com', 'password' => Hash::make('password68')],
    ['name' => 'Teszt Felhasználó 69', 'email' => 'user69@example.com', 'password' => Hash::make('password69')],
    ['name' => 'Teszt Felhasználó 70', 'email' => 'user70@example.com', 'password' => Hash::make('password70')],
    ['name' => 'Teszt Felhasználó 71', 'email' => 'user71@example.com', 'password' => Hash::make('password71')],
    ['name' => 'Teszt Felhasználó 72', 'email' => 'user72@example.com', 'password' => Hash::make('password72')],
    ['name' => 'Teszt Felhasználó 73', 'email' => 'user73@example.com', 'password' => Hash::make('password73')],
    ['name' => 'Teszt Felhasználó 74', 'email' => 'user74@example.com', 'password' => Hash::make('password74')],
    ['name' => 'Teszt Felhasználó 75', 'email' => 'user75@example.com', 'password' => Hash::make('password75')],
    ['name' => 'Teszt Felhasználó 76', 'email' => 'user76@example.com', 'password' => Hash::make('password76')],
    ['name' => 'Teszt Felhasználó 77', 'email' => 'user77@example.com', 'password' => Hash::make('password77')],
    ['name' => 'Teszt Felhasználó 78', 'email' => 'user78@example.com', 'password' => Hash::make('password78')],
    ['name' => 'Teszt Felhasználó 79', 'email' => 'user79@example.com', 'password' => Hash::make('password79')],
    ['name' => 'Teszt Felhasználó 80', 'email' => 'user80@example.com', 'password' => Hash::make('password80')],
    ['name' => 'Teszt Felhasználó 81', 'email' => 'user81@example.com', 'password' => Hash::make('password81')],
    ['name' => 'Teszt Felhasználó 82', 'email' => 'user82@example.com', 'password' => Hash::make('password82')],
    ['name' => 'Teszt Felhasználó 83', 'email' => 'user83@example.com', 'password' => Hash::make('password83')],
    ['name' => 'Teszt Felhasználó 84', 'email' => 'user84@example.com', 'password' => Hash::make('password84')],
    ['name' => 'Teszt Felhasználó 85', 'email' => 'user85@example.com', 'password' => Hash::make('password85')],
    ['name' => 'Teszt Felhasználó 86', 'email' => 'user86@example.com', 'password' => Hash::make('password86')],
    ['name' => 'Teszt Felhasználó 87', 'email' => 'user87@example.com', 'password' => Hash::make('password87')],
    ['name' => 'Teszt Felhasználó 88', 'email' => 'user88@example.com', 'password' => Hash::make('password88')],
    ['name' => 'Teszt Felhasználó 89', 'email' => 'user89@example.com', 'password' => Hash::make('password89')],
    ['name' => 'Teszt Felhasználó 90', 'email' => 'user90@example.com', 'password' => Hash::make('password90')],
    ['name' => 'Teszt Felhasználó 91', 'email' => 'user91@example.com', 'password' => Hash::make('password91')],
    ['name' => 'Teszt Felhasználó 92', 'email' => 'user92@example.com', 'password' => Hash::make('password92')],
    ['name' => 'Teszt Felhasználó 93', 'email' => 'user93@example.com', 'password' => Hash::make('password93')],
    ['name' => 'Teszt Felhasználó 94', 'email' => 'user94@example.com', 'password' => Hash::make('password94')],
    ['name' => 'Teszt Felhasználó 95', 'email' => 'user95@example.com', 'password' => Hash::make('password95')],
    ['name' => 'Teszt Felhasználó 96', 'email' => 'user96@example.com', 'password' => Hash::make('password96')],
    ['name' => 'Teszt Felhasználó 97', 'email' => 'user97@example.com', 'password' => Hash::make('password97')],
    ['name' => 'Teszt Felhasználó 98', 'email' => 'user98@example.com', 'password' => Hash::make('password98')],
    ['name' => 'Teszt Felhasználó 99', 'email' => 'user99@example.com', 'password' => Hash::make('password99')],
    ['name' => 'Teszt Felhasználó 100', 'email' => 'user100@example.com', 'password' => Hash::make('password100')],

    ];        

        foreach ($users as $user) {
            User::create($user);
        }
    }
}

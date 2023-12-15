<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = $this->getData();

        foreach ($data as $user){
            $email = $user['email'];

            $db_user = User::where('email',$email)->first();

            if(!$db_user){
                User::create([
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'password' => bcrypt($user['password']),
                    'account_type' => $user['account_type'],
                ]);
            }
        }

        dump("Done creating users");
    }

    public function getData()
    {
        return [
            [
                "username" => "Super_Administrator",
                "email" => "superadmin@email.com",
                "password" => "password",
                "account_type" => "Super Administrator",
            ],
            [
                "username" => "Administrator",
                "email" => "admin@email.com",
                "password" => "password",
                "account_type" => "Administrator",
            ],
            [
                "username" => "Moderator",
                "email" => "moderator@email.com",
                "password" => "password",
                "account_type" => "Administrator",
            ],
            [
                "username" => "Game_Master",
                "email" => "gamemaster@email.com",
                "password" => "password",
                "account_type" => "Game Master",
            ],
            [
                "username" => "Guest",
                "email" => "guest@email.com",
                "password" => "password",
                "account_type" => "Guest",
            ]
        ];
    }
}

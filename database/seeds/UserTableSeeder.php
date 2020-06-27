<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        $users = [
            [
                'name' => 'System Admin',
                'email' => 'systemadmin@gmail.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Staff',
                'email' => 'staff@gmail.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Client',
                'email' => 'client@gmail.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Moderator',
                'email' => 'info@gmail.com',
                'password' => Hash::make('123456'),
            ],
        ];

        foreach ($users as $user) {
            App\User::create($user);
        }
    }
}

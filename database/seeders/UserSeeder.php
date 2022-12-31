<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [

            [
                'name' => 'Admin',
                'email' => 'admin@demo.com',
                'password' => '12345678',
                'role' => 'superadmin',
            ],
            [
                'name' => 'Vendor',
                'email' => 'vendor@demo.com',
                'password' => '12345678',
                'role' => 'admin',
            ]
        ];
        foreach($users as $user){
            User::create([
                'name' => $user['name'],
                'email'=> $user['email'],
                'password' => Hash::make($user['password'])
            ]);
        }
    }
}

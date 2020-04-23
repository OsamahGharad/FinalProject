<?php

use App\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username'=>'Admin',
                'email'=>'admin@itsolutionstuff.com',
                'is_admin'=>'1',
                'password'=> bcrypt('123456'),
            ],
            [
                'username'=>'User',
                'email'=>'user@itsolutionstuff.com',
                'is_admin'=>'0',
                'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);

        }
    }
}

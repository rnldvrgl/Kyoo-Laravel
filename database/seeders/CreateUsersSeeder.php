<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $users = [
            [
                'name' => 'Main Admin',
                'email' => 'maindmin@sample.com',
                'role' => 0,
                'username' => 'mainAdmin',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Department Admin',
                'email' => 'depAdmin@sample.com',
                'role' => 1,
                'username' => 'departmentAdmin',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Department Staff',
                'email' => 'staff@sample.com',
                'role' => 2,
                'username' => 'staff',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Librarian User',
                'email' => 'librarian@sample.com',
                'role' => 3,
                'username' => 'librarian',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}

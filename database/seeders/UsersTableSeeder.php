<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@accsys.com',
                'password' => bcrypt('1234'),
                'role' => 'admin',
                'created_at' => '2024-11-25 21:17:06',
                'updated_at' => '2024-11-25 21:17:06',
            ],
            [
                'id' => 2,
                'name' => 'Manager',
                'email' => 'manager@accsys.com',
                'password' => bcrypt('1234'),
                'role' => 'manager',
                'created_at' => '2024-11-25 21:21:23',
                'updated_at' => '2024-11-25 21:21:23',
            ],
            [
                'id' => 3,
                'name' => 'Accountant',
                'email' => 'accountant@accsys.com',
                'password' => bcrypt('1234'),
                'role' => 'accountant',
                'created_at' => '2024-11-26 17:41:04',
                'updated_at' => '2024-11-26 17:41:04',
            ],
        ];

        DB::table('users')->insert($data);
    }
}

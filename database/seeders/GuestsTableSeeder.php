<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'first_name' => 'Alice',
                'last_name' => 'Johnson',
                'phone_number' => '1234567890',
                'email' => 'alice.johnson@example.com',
                'address' => '123 Main St',
                'created_at' => '2024-11-26 00:24:06',
                'updated_at' => '2024-11-26 00:24:06',
            ],
            [
                'id' => 2,
                'firstname' => 'Bob',
                'last_name' => 'Williams',
                'phone_number' => '0987654321',
                'email' => 'bob.williams@example.com',
                'address' => '456 Elm St',
                'created_at' => '2024-11-26 00:24:06',
                'updated_at' => '2024-11-26 00:24:06',
            ],
            [
                'id' => 3,
                'firstname' => 'Charlie',
                'last_name' => 'Davis',
                'phone_number' => '1122334455',
                'email' => 'charlie.davis@example.com',
                'address' => '789 Oak St',
                'created_at' => '2024-11-26 00:24:06',
                'updated_at' => '2024-11-26 00:24:06',
            ],
        ];

        DB::table('guests')->insert($data);
    }
}

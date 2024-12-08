<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'room_number' => 101,
                'type' => 'single',
                'price_per_night' => 50.00,
                'status' => 'available',
                'created_at' => '2024-11-26 00:24:41',
                'updated_at' => '2024-11-26 00:24:41',
            ],
            [
                'id' => 2,
                'room_number' => 102,
                'type' => 'double',
                'price_per_night' => 75.00,
                'status' => 'occupied',
                'created_at' => '2024-11-26 00:24:41',
                'updated_at' => '2024-11-26 00:24:41',
            ],
            [
                'id' => 3,
                'room_number' => 201,
                'type' => 'suite',
                'price_per_night' => 150.00,
                'status' => 'maintenance',
                'created_at' => '2024-11-26 00:24:41',
                'updated_at' => '2024-11-26 00:24:41',
            ],
        ];

        DB::table('rooms')->insert($data);
    }
}

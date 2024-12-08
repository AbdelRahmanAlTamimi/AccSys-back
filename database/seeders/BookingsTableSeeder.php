<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'guest_id' => 1,
                'room_id' => 1,
                'check_in_date' => '2024-11-01',
                'check_out_date' => '2024-11-05',
                'total_amount' => 200.00,
                'payment_status' => 'paid',
                'created_at' => '2024-11-26 00:25:32',
                'updated_at' => '2024-11-26 00:25:32',
            ],
            [
                'id' => 2,
                'guest_id' => 2,
                'room_id' => 2,
                'check_in_date' => '2024-11-02',
                'check_out_date' => '2024-11-06',
                'total_amount' => 300.00,
                'payment_status' => 'pending',
                'created_at' => '2024-11-26 00:25:32',
                'updated_at' => '2024-11-26 00:25:32',
            ],
        ];

        DB::table('bookings')->insert($data);
    }
}

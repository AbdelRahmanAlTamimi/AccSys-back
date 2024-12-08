<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpensesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'description' => 'Electricity Bill',
                'amount' => 300.00,
                'expense_date' => '2024-10-01',
                'category' => 'utilities',
                'created_by' => 2,
                'created_at' => '2024-11-26 00:26:23',
                'updated_at' => '2024-11-26 00:26:23',
            ],
            [
                'id' => 2,
                'description' => 'Room Cleaning Supplies',
                'amount' => 50.00,
                'expense_date' => '2024-10-05',
                'category' => 'supplies',
                'created_by' => 2,
                'created_at' => '2024-11-26 00:26:23',
                'updated_at' => '2024-11-26 00:26:23',
            ],
        ];

        DB::table('expenses')->insert($data);
    }
}

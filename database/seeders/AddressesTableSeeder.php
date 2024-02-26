<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1, 10) as $index) {
            DB::table('addresses')->insert([
                'user_id' => random_int(1, 10),
                'city_id' => random_int(1, 10),
                'street' => 'Rua Exemplo, 123',
                'zip_code' => '01000-000',
            ]);
        }
    }
}

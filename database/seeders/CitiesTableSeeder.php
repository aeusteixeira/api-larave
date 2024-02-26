<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([
            ['name' => 'São Paulo', 'state_id' => 1],
            ['name' => 'Rio de Janeiro', 'state_id' => 2],
            ['name' => 'Belo Horizonte', 'state_id' => 3],
            ['name' => 'Porto Alegre', 'state_id' => 4],
            ['name' => 'Florianópolis', 'state_id' => 5],
            ['name' => 'Curitiba', 'state_id' => 6],
            ['name' => 'Manaus', 'state_id' => 7],
            ['name' => 'Brasília', 'state_id' => 8],
            ['name' => 'Recife', 'state_id' => 9],
            ['name' => 'Natal', 'state_id' => 10],
        ]);
    }
}

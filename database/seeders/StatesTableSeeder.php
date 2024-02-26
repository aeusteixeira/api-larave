<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('states')->insert([
            ['name' => 'São Paulo'],
            ['name' => 'Rio de Janeiro'],
            ['name' => 'Minas Gerais'],
            ['name' => 'Espirito Santo'],
            ['name' => 'Santa Catarina'],
            ['name' => 'Parana'],
            ['name' => 'Bahia'],
            ['name' => 'Pernambuco'],
            ['name' => 'Ceará'],
            ['name' => 'Alagoas'],
            ['name' => 'Sergipe'],
            ['name' => 'Paraíba'],
            ['name' => 'Rio Grande do Norte'],
            ['name' => 'Piauí'],
            ['name' => 'Maranhão'],
            ['name' => 'Tocantins'],
            ['name' => 'Pará'],
            ['name' => 'Amapá'],
            ['name' => 'Amazonas'],
            ['name' => 'Roraima'],
            ['name' => 'Rondônia'],
            ['name' => 'Acre'],
            ['name' => 'Goiás'],
            ['name' => 'Mato Grosso'],
            ['name' => 'Mato Grosso do Sul'],
            ['name' => 'Distrito Federal'],
            ['name' => 'Rio Grande do Sul'],
            ['name' => 'Espírito Santo'],
            ['name' => 'Tocantins'],
        ]);
    }
}

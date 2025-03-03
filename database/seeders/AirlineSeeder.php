<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirlineSeeder extends Seeder {
    public function run() {
        DB::table('airlines')->insert([
            ['name' => 'Iberia', 'code' => 'IB', 'description' => 'Aerolínea española con base en Madrid'],
            ['name' => 'Ryanair', 'code' => 'FR', 'description' => 'Aerolínea irlandesa de bajo coste'],
            ['name' => 'Lufthansa', 'code' => 'LH', 'description' => 'Aerolínea alemana con vuelos internacionales'],
            ['name' => 'Air France', 'code' => 'AF', 'description' => 'Aerolínea francesa con sede en París'],
        ]);
    }
}

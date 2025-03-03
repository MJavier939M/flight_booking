<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirportSeeder extends Seeder {
    public function run() {
        DB::table('airports')->insert([
            ['name' => 'Aeropuerto Adolfo Suárez Madrid-Barajas', 'code' => 'MAD', 'city' => 'Madrid', 'country' => 'España'],
            ['name' => 'Aeropuerto de Barcelona-El Prat', 'code' => 'BCN', 'city' => 'Barcelona', 'country' => 'España'],
            ['name' => 'Aeropuerto de París-Charles de Gaulle', 'code' => 'CDG', 'city' => 'París', 'country' => 'Francia'],
            ['name' => 'Aeropuerto de Londres-Heathrow', 'code' => 'LHR', 'city' => 'Londres', 'country' => 'Reino Unido'],
            ['name' => 'Aeropuerto de Roma-Fiumicino', 'code' => 'FCO', 'city' => 'Roma', 'country' => 'Italia'],
            ['name' => 'Aeropuerto de Berlín-Brandenburgo', 'code' => 'BER', 'city' => 'Berlín', 'country' => 'Alemania'],
            ['name' => 'Aeropuerto de Ámsterdam-Schiphol', 'code' => 'AMS', 'city' => 'Ámsterdam', 'country' => 'Países Bajos'],
            ['name' => 'Aeropuerto de Lisboa-Humberto Delgado', 'code' => 'LIS', 'city' => 'Lisboa', 'country' => 'Portugal'],
            ['name' => 'Aeropuerto de Nueva York-JFK', 'code' => 'JFK', 'city' => 'Nueva York', 'country' => 'Estados Unidos'],
            ['name' => 'Aeropuerto Internacional de Tokio-Haneda', 'code' => 'HND', 'city' => 'Tokio', 'country' => 'Japón'],
        ]);
    }
}


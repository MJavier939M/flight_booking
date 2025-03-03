<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder {
    public function run() {
        $userIds = DB::table('users')->pluck('id'); // Obtiene todos los IDs de usuarios
        $flightIds = DB::table('flights')->pluck('id'); // Obtiene todos los IDs de vuelos

        if ($userIds->count() < 3 || $flightIds->count() < 4) {
            return; // Evita errores si hay pocos usuarios o vuelos
        }

        DB::table('reservations')->insert([
            [
                'user_id' => $userIds[0],
                'flight_id' => $flightIds[0],
                'passengers' => 2,
                'notes' => 'Ventana preferida'
            ],
            [
                'user_id' => $userIds[1],
                'flight_id' => $flightIds[1],
                'passengers' => 1,
                'notes' => 'Sin preferencias'
            ],
            [
                'user_id' => $userIds[2],
                'flight_id' => $flightIds[2],
                'passengers' => 3,
                'notes' => 'Asientos juntos'
            ],
            [
                'user_id' => $userIds[0],
                'flight_id' => $flightIds[3],
                'passengers' => 1,
                'notes' => 'Maleta extra'
            ],
        ]);
    }
}


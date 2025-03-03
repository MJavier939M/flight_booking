<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FlightSeeder extends Seeder {
    public function run() {
        DB::table('flights')->insert([
            [
                'airline_id' => 1, // Iberia
                'origin_airport_id' => 1, // Madrid
                'destination_airport_id' => 3, // París
                'departure_time' => Carbon::now()->addDays(3)->format('Y-m-d H:i:s'),
                'arrival_time' => Carbon::now()->addDays(3)->addHours(2)->format('Y-m-d H:i:s'),
                'price' => 150.00,
                'available_seats' => 200
            ],
            [
                'airline_id' => 2, // Ryanair
                'origin_airport_id' => 2, // Barcelona
                'destination_airport_id' => 4, // Londres
                'departure_time' => Carbon::now()->addDays(5)->format('Y-m-d H:i:s'),
                'arrival_time' => Carbon::now()->addDays(5)->addHours(2)->format('Y-m-d H:i:s'),
                'price' => 80.00,
                'available_seats' => 180
            ],
            [
                'airline_id' => 3, // Lufthansa
                'origin_airport_id' => 6, // Berlín
                'destination_airport_id' => 7, // Ámsterdam
                'departure_time' => Carbon::now()->addDays(10)->format('Y-m-d H:i:s'),
                'arrival_time' => Carbon::now()->addDays(10)->addHours(1)->format('Y-m-d H:i:s'),
                'price' => 120.00,
                'available_seats' => 150
            ],
            [
                'airline_id' => 4, // Air France
                'origin_airport_id' => 8, // Lisboa
                'destination_airport_id' => 9, // Nueva York
                'departure_time' => Carbon::now()->addDays(15)->format('Y-m-d H:i:s'),
                'arrival_time' => Carbon::now()->addDays(15)->addHours(7)->format('Y-m-d H:i:s'),
                'price' => 500.00,
                'available_seats' => 220
            ],
        ]);
    }
}

<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Flight extends Model {


    protected $fillable = [
        'airline_id',
        'origin_airport_id',
        'destination_airport_id',
        'departure_time',
        'arrival_time',
        'price',
        'available_seats'
    ];

    public function airline() {
        return $this->belongsTo(Airline::class);
    }

    public function originAirport() {
        return $this->belongsTo(Airport::class, 'origin_airport_id');
    }

    public function destinationAirport() {
        return $this->belongsTo(Airport::class, 'destination_airport_id');
    }

    public function reservations() {
        return $this->hasMany(Reservation::class);
    }

    public function getDurationAttribute() {
        return Carbon::parse($this->departure_time)->diffInMinutes(Carbon::parse($this->arrival_time));
    }
}

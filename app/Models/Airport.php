<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model {

    protected $fillable = ['name', 'code', 'city', 'country'];

    public function originFlights() {
        return $this->hasMany(Flight::class, 'origin_airport_id');
    }

    public function destinationFlights() {
        return $this->hasMany(Flight::class, 'destination_airport_id');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('flight_id')->constrained('flights')->onDelete('restrict');
            $table->unsignedInteger('passengers')->check('passengers > 0');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('reservations');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookingdbs', function (Blueprint $table) {
            $table->id();
            $table->string('nameUser');
            $table->string('mounting');
            $table->date('Date');
            $table->time('Time');
            $table->string('location');
            $table->string('hour_rate');
            $table->string('Priceforhourrate');
            $table->string('tax');
            $table->string('Promo_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookingdbs');
    }
};

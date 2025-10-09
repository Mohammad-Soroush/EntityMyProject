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
        Schema::create('final_prices', function (Blueprint $table) {
            $table->id();
            $table->time('HourlyRate');
            $table->string('PriceofHourlyrate');
            $table->string('Discount');
            $table->string('Tax');
            $table->decimal('overallservice');
            $table->decimal('Reliablity',2,1)->default(0);
            $table->decimal('Punctuality',2,1)->default(0);
            $table->decimal('Solution',2,1)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('final_prices');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new  class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('taskerprofiles', function (Blueprint $table) {
            $table->id();
            $table->boolean('Top pro')->default(0);
            $table->string('name');
            $table->string('mounting service');
            $table->string('price');
            $table->decimal('rate',2,1)->default(0);
            $table->string('hour');
            $table->string('Expirence and Specialities');
            $table->decimal('Customer rating',2,1)->default(0);
            $table->decimal('rateNumber',2,1)->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taskerprofiles');
    }
};

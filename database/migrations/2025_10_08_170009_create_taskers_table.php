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
        Schema::create('taskers', function (Blueprint $table) {
            $table->id();
            $table->string('result');
            $table->string('namesoftaskers');
            $table->string('kind');
            $table->string('price');
            $table->decimal('rate',2,1)->default(0);
            $table->time('resevation_time');
            $table->string('location');
            $table->boolean('Top pro');
            $table->unsignedInteger('review_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taskers');
    }
};

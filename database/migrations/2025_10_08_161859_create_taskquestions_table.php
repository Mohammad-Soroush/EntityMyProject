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
        Schema::create('taskquestions', function (Blueprint $table) {
            $table->id();
            $table->string('taskLocation');
            $table->string('Neighborhood')->nullable();
            $table->enum('how many',['1','2','3','4or more']);
            $table->enum('type of wall for tv',['drywall','brick or stone','concrete','wood','Other/Im not sure']);
            $table->enum('Tv mount or provider',['Yes, I already have a Tv mount', 'No, i need  one provider','Im not sure']);
            $table->enum('cable concealment',['Inside the wall', 'External cover', 'No cable concealment']);
            $table->string('Any information')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taskquestions');
    }
};

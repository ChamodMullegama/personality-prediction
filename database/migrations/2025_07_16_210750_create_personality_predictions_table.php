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
        Schema::create('personality_predictions', function (Blueprint $table) {
          $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('email');
            $table->float('time_alone');
            $table->float('social_events');
            $table->float('going_outside');
            $table->integer('friends_circle');
            $table->float('post_frequency');
            $table->string('stage_fear');
            $table->string('drained_socializing');
            $table->string('personality_type');
            $table->float('confidence');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personality_predictions');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sensor_data', function (Blueprint $table) {

            $table->id();

            $table->foreignId('device_id')
                  ->constrained()
                  ->onDelete('cascade');

            $table->float('temperature');

            $table->float('humidity');

            $table->string('status');

            $table->string('recommendation');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sensor_data');
    }
};
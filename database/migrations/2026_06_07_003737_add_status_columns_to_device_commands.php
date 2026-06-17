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
        Schema::table('device_commands', function (Blueprint $table) {
            $table->string('led_green_status')->default('off');
            $table->string('led_red_status')->default('off');
            $table->string('buzzer_status')->default('off');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('device_commands', function (Blueprint $table) {
            //
        });
    }
};

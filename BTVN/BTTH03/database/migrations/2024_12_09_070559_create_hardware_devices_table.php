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
        Schema::create('hardware_devices', function (Blueprint $table) {
            $table->integer('id')->primary(); 
            $table->string('device_name', 100);
            $table->enum('type', ['Mouse', 'Keyboard', 'Headset']); 
            $table->boolean('status'); 
            $table->integer('center_id');

            $table->foreign('center_id')->references('id')->on('it_centers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hardware_devices');
    }
};

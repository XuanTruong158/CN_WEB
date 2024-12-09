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
        Schema::create('laptops', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('brand',50);
            $table->string('model',100);
            $table->string('specifications',100);
            $table->boolean('rental_status');
            $table->integer('renter_id');

            $table->foreign('renter_id')->references('id')->on('renters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laptops');
    }
};

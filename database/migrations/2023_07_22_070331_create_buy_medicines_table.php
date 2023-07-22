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
        Schema::create('buy_medicines', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('shipping_address', 255);
            $table->string('phone', 255);
            $table->string('userId', 255);
            $table->string('MedicineId', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buy_medicines');
    }
};
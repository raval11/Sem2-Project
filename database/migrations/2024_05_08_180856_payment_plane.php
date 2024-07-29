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
        Schema::create('PaymentPlane', function (Blueprint $table) {
            $table->bigIncrements('planeid');
            $table->string('planeName', 50)->nullable();
            $table->string('duration', 50)->nullable(); // Corrected the column name
            $table->decimal('price', 8, 2)->nullable(); // Use decimal for prices with precision and scale
            $table->text('description')->nullable();
            $table->timestamps(); // This line should be at the end, after all columns
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PaymentData');
    }
};

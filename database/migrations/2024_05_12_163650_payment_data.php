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
        Schema::create('PaymentData', function (Blueprint $table) {
            $table->bigIncrements('paymentid');
            $table->unsignedBigInteger('planeid'); // Use unsignedBigInteger for foreign keys
            $table->string('user_id', 50)->nullable();
            $table->foreign('user_id')->references('user_id')->on('User_Data')->onDelete('cascade');
            $table->foreign('planeid')->references('planeid')->on('PaymentPlane')->onDelete('cascade');
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

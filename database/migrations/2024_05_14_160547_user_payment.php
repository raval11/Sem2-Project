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
        Schema::create('UserPayment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id', 50)->nullable();
            $table->string('event_id',50)->nullable();
            $table->string('price');
            $table->foreign('user_id')->references('user_id')->on('User_Data')->onDelete('cascade');
            $table->foreign('event_id')->references('event_id')->on('events')->onDelete('cascade');
            $table->timestamps(); // This line should be at the end, after all columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

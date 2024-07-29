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
        Schema::create('events', function (Blueprint $table) {
            $table->string('event_id',50)->primary();
            $table->string('event_name');
            $table->string('user_id');
            $table->enum('category', ['Business', 'Exhibitions', 'Festivals', 'Charity', 'Sports','Fair'])->default('Business');
            $table->string('city');
            // $table->string('total_sets');
            $table->string('image');
            $table->string('ticket_price');
            $table->text('description');
            $table->date('start_date');
            // $table->date('end_date')->nullable();
            // $table->time('starting_time')->nullable();
            // $table->time('ending_time')->nullable();
            $table->foreign('user_id')->references('user_id')->on('User_Data')->onDelete('cascade');
            $table->timestamps(); // This line should be at the end, after all columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};

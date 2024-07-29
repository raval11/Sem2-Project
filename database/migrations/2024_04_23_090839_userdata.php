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
         Schema::create('User_Data',function(Blueprint $table){
            $table->string('user_id',50)->primary();
            $table->string('Name');
            $table->string('email')->unique();
            $table->string('User_Name')->unique();
            $table->string('Phone',11)->unique();
            $table->string('Password');
            $table->string('City');
            $table->enum('Role',['admin','organizer','user'])->default('user');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('User_Data');
    }
};

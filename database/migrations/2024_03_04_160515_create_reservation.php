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
        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id'); 
            $table->unsignedBigInteger('client_id');
            $table->integer('number_of_people');
            $table->boolean('status')->default(1);
            $table->timestamps();

            
            $table->foreign('event_id')->references('id')->on('events'); 
            $table->foreign('client_id')->references('id')->on('clients'); 
       

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation');
    }
};

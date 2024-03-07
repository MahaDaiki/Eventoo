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
            $table->integer('number_of_tickets');
            $table->boolean('status')->default(1);
            $table->softDeletes();
            $table->timestamps();

            
            $table->foreign('event_id')
            ->references('id')
            ->on('events')
            ->onDelete('cascade') 
            ->onUpdate('cascade');

        $table->foreign('client_id')
            ->references('id')
            ->on('clients')
            ->onDelete('cascade') 
            ->onUpdate('cascade');

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

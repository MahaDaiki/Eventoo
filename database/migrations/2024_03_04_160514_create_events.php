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
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->datetime('time');
            $table->string('location'); 
            $table->time('duration'); 
            $table->integer('disponible_tickets');
            $table->boolean('is_valid')->default(0);
            $table->boolean('is_automatic')->default(0);
            $table->unsignedBigInteger('organizer_id');
            $table->unsignedBigInteger('category_id');  
            $table->foreign('organizer_id')
            ->references('id')
            ->on('organizers')
            ->onDelete('cascade') 
            ->onUpdate('cascade');
        $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade') 
            ->onUpdate('cascade'); 
            $table->bigInteger('id_media')->nullable();
            $table->softDeletes();
            $table->timestamps();
            
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

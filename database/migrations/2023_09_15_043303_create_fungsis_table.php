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
        Schema::create('fungsi', function (Blueprint $table) {
            $table->id('fungsi_id');
            $table->string('fungsi_name');
            $table->unsignedBigInteger('unit_id');
            $table->timestamps();
        
            $table->foreign('unit_id')
                  ->references('unit_id')
                  ->on('unit')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fungsis');
    }
};

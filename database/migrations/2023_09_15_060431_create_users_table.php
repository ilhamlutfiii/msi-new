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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_nama');
            $table->string('user_nid')->unique();
            $table->unsignedBigInteger('jabatan_id'); 
            $table->unsignedBigInteger('bidang_id');
            $table->unsignedBigInteger('fungsi_id');   
            $table->string('password');
            $table->string('cpass');
            $table->rememberToken();
            $table->timestamps();
        
            // Menambahkan kunci asing (foreign keys)
            $table->foreign('jabatan_id')->references('jabatan_id')->on('jabatan')->onDelete('cascade')->onUpdate('cascade'); 
            $table->foreign('bidang_id')->references('bidang_id')->on('bidang')->onDelete('cascade')->onUpdate('cascade');  
            $table->foreign('fungsi_id')->references('fungsi_id')->on('fungsi')->onDelete('cascade')->onUpdate('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

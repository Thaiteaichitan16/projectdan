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
        Schema::create('admin', function (Blueprint $table){
            $table->integer('PetugasID');
            $table->string('Username', 255);
            $table->string('Password', 255);
            $table->string('NamaLengkap', 255);
            $table->enum('Level',['Admin','Petugas']);
            $table->timestamps();
            $table->primary('PetugasID');
        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('admin');
        //
    }
};

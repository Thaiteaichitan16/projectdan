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
        Schema::create('kategoribuku', function (Blueprint $table){
            $table->integer('KategoriID');
            $table->string('NamaKategori', 255);
            $table->timestamps();
            $table->primary('KategoriID');
        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('kategoribuku');
        //
    }
};

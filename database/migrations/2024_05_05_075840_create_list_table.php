<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {

        Schema::create('list', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang')->unique();
            $table->string('nama_barang');
            $table->integer('price');
            $table->foreignId('unit_id')->constrained();
            $table->string('description');
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('list');
    }
};

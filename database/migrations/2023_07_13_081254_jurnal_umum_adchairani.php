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
        Schema::create('jurnal_umum_adchairani', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor_jurnal');
            $table->string('kode_jurnal',50);
            $table->string('keterangan',15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jurnal_umum_adchairani');
    }
};

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
        Schema::create('katalog', function (Blueprint $table) {
            $table->id('id_katalog');
            $table->unsignedBigInteger('kode_buku_induk');
            $table->foreign('kode_buku_induk')->references('kode_buku_induk')->on('buku_induk');
            // $table->string('judul', 100);
            $table->string('penanggung_jawab', 60);
            // $table->string('penulis', 70);
            $table->string('kotaTerbit', 20);
            // $table->string('penerbit', 50);
            $table->year('tahunTerbit');
            $table->integer('jumlah_hal');
            $table->integer('dimensi');
            $table->string('edisi', 20);
            // $table->unsignedBigInteger('id_klasifikasi');
            $table->string('callNumber', 10);
            $table->string('ISBN', 20);
            $table->string('catatan', 200);
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id_user')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('katalogs');
    }
};

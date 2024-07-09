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
        Schema::create('buku_induks', function (Blueprint $table) {
            $table->id('kode_buku_induk');
            $table->foreignId('kode_ddc');
            $table->year('tahun');
            $table->string('bahasa', 100);
            $table->string('kategori', 100);
            $table->integer('jml_eks');
            $table->integer('jml_jld');
            $table->foreignId('id_perolehan');
            $table->decimal('harga');
            // $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku_induks');
    }
};

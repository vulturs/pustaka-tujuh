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
        Schema::create('buku_induk', function (Blueprint $table) {
            $table->id('kode_buku_induk');
            $table->string('no_barcode');
            $table->string('pengarang', 70);
            $table->string('judul_buku', 70);
            // $table->foreignId('kode_ddc')->constrained(
            //     table: 'klasifikasis',
            //     indexName: 'buku_induks_kode_ddc'
            // );
            $table->unsignedBigInteger('id_klasifikasi');
            $table->foreign('id_klasifikasi')->references('id_klasifikasi')->on('klasifikasi');
            $table->year('tahun');
            $table->string('bahasa', 10);
            $table->unsignedBigInteger('id_penerbit');
            $table->foreign('id_penerbit')->references('id_penerbit')->on('penerbit');
            $table->unsignedBigInteger('id_perolehan');
            $table->foreign('id_perolehan')->references('id_perolehan')->on('perolehan');
            $table->integer('jml_eks');
            $table->integer('jml_jld');
            $table->decimal('harga');
            $table->string('tipe_harga', 13);
            $table->string('ketersediaan', 10);
            // $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku_induk');
    }
};

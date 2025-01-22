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
            $table->string('pengarang', 70);
            $table->string('judul_buku', 70);
            // $table->foreignId('kode_ddc')->constrained(
            //     table: 'klasifikasis',
            //     indexName: 'buku_induks_kode_ddc'
            // );
            $table->unsignedBigInteger('kode_ddc');
            $table->foreign('kode_ddc')->references('kode_ddc')->on('klasifikasi');
            $table->year('tahun');
            $table->string('kota_terbit', 150);
            $table->string('bahasa', 10);
            $table->unsignedBigInteger('id_penerbit');
            $table->foreign('id_penerbit')->references('id_penerbit')->on('penerbit');
            $table->string('isbn', 13)->nullable();
            $table->integer('jum_hlm')->nullable();
            $table->float('dimensi')->nullable();
            $table->string('edisi', 100)->nullable();
            // $table->string('tipe_harga', 13);
            $table->integer('jumlah_total');
            $table->string('satuan', 10);
            $table->integer('stok_tersedia');
            $table->decimal('harga');
            $table->string('tipe_harga', 13);
            $table->string('ketersediaan', 20);
            $table->unsignedBigInteger('id_perolehan');
            $table->foreign('id_perolehan')->references('id_perolehan')->on('perolehan');
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id_user')->on('users');
            $table->string('cover')->nullable();
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

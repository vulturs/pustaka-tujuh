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
        Schema::create('klasifikasi', function (Blueprint $table) {
            $table->unsignedBigInteger('kode_ddc'); // Mendefinisikan kolom kode_ddc tanpa auto-increment
            $table->string('klasifikasi', 50)->nullable();
            $table->string('keterangan', 200)->nullable();
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id_user')->on('users');
            $table->timestamps();

            $table->primary('kode_ddc'); // Menjadikan kode_ddc sebagai primary key
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('klasifikasi');
    }
};

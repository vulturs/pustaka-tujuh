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
        Schema::create('perolehan', function (Blueprint $table) {
            $table->id('id_perolehan');
            $table->string('nama_sumber', 100);
            $table->string('no_telp', 13);
            $table->string('provinsi', 20);
            $table->string('kota_kab', 25);
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
        Schema::dropIfExists('perolehan');
    }
};

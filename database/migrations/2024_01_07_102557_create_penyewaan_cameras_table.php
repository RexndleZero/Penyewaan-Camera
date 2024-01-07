<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyewaan_cameras', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peminjam');
            $table->string('alamat');
            $table->string('nomor_handphone');
            $table->string('nama_camera');
            $table->string('kategori_camera');
            $table->date('tanggal_awal_peminjaman');
            $table->date('tanggal_selesai_peminjaman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penyewaan_cameras');
    }
};

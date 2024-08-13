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
        Schema::create('kunjungans', function (Blueprint $table) {
            $table->id();
            $table->string('tiket')->unique();
            $table->string('nik');
            $table->string('nama_pengunjung');
            $table->string('narapidana');
            $table->text('barang_bawaan');
            $table->string('hubungan');
            $table->integer('jumlah_pengunjung');
            $table->date('tanggal_kunjungan');
            $table->integer('sesi_kunjungan');
            $table->time('waktu_status');
            $table->boolean('diperiksa')->default(false);
            $table->integer('status_periksa');
            $table->integer('antrian');
            $table->time('waktu_antrian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kunjungans');
    }
};

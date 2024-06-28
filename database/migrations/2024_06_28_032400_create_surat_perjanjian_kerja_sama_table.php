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
        Schema::create('surat_perjanjian_kerja_sama', function (Blueprint $table) {
            $table->id();
            $table->string('nomer')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('pihak_pertama_nama')->nullable();
            $table->string('pihak_pertama_pekerjaan')->nullable();
            $table->string('pihak_pertama_jabatan')->nullable();
            $table->string('pihak_pertama_no_ktp')->nullable();
            $table->string('pihak_pertama_alamat')->nullable();
            $table->string('pihak_pertama_telepon')->nullable();
            $table->string('pihak_kedua_nama')->nullable();
            $table->string('pihak_kedua_pekerjaan')->nullable();
            $table->string('pihak_kedua_jabatan')->nullable();
            $table->string('pihak_kedua_no_ktp')->nullable();
            $table->string('pihak_kedua_alamat')->nullable();
            $table->string('pihak_kedua_telepon')->nullable();
            $table->text('jenis_aplikasi')->nullable();
            $table->text('sasaran_pangsa_pasar')->nullable();
            $table->text('wilayah_pasar')->nullable();
            $table->integer('jangka_waktu_tahun')->nullable();
            $table->text('teknik_bimbingan')->nullable();
            $table->text('keamanan_data')->nullable();
            $table->text('lain_lain')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_perjanjian_kerja_sama');
    }
};

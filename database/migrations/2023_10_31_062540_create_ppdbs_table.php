<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpdbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppdbs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nikSiswa');
            $table->string('tempatLahir');
            $table->string('tglLahir');
            $table->enum('gender',['laki_laki', 'perempuan']);
            $table->enum('kelas',['1','2','3','4','5','6']);
            $table->enum('kelasParalel',['lama', 'baru']);
            $table->string('kelasAwal')->nullable();
            $table->string('sekolahLama')->nullable();
            $table->string('golDarah');
            $table->string('usia');
            $table->string('tinggi');
            $table->string('berat');
            $table->string('jumSaudara');
            $table->string('anakNo');
            $table->string('saudaraNo');
            $table->string('npsn')->nullable();
            $table->string('asalSekolah');
            $table->string('noIjazah')->nullable();
            $table->string('tglLulus');
            $table->string('noKK');
            $table->string('alamat');
            $table->string('desa');
            $table->string('kec');
            $table->string('kota');
            $table->string('prov');
            $table->string('kodePos');
            $table->string('jarakRumah')->nullable();
            $table->string('transport')->nullable();
            $table->string('namaAyah');
            $table->string('nikAyah');
            $table->string('pendidikanAyah');
            $table->string('pekerjaanAyah');
            $table->string('noHpAyah');
            $table->string('namaIbu');
            $table->string('nikIbu');
            $table->string('pendidikanIbu');
            $table->string('pekerjaanIbu');
            $table->string('noHpIbu');
            $table->string('namaWali')->nullable();
            $table->string('nikWali')->nullable();
            $table->string('pendidikanWali')->nullable();
            $table->string('pekerjaanWali')->nullable();
            $table->string('noHpWali')->nullable();
            $table->string('alamatWali')->nullable();
            $table->string('hobi');
            $table->string('cita_cita');
            $table->string('prestasi')->nullable();
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
        Schema::dropIfExists('ppdbs');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuridsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('murids', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('kelasId');
            $table->string('nisn')->unique();
            $table->string('nik')->unique();
            $table->string('tempat');
            $table->date('tglLahir');
            $table->string('umur');
            $table->string('alamat');
            $table->string('noHp');
            $table->enum('status',['aktif', 'tidak-aktif']);
            $table->enum('gender',['laki_laki', 'perempuan']);
            $table->enum('kebKhusus',['iya', 'tidak']);
            $table->enum('disabilitas',['iya', 'tidak']);
            $table->string('kip')->nullable();
            $table->string('namaAyah');
            $table->string('namaIbu');
            $table->string('namaWali')->nullable();
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
        Schema::dropIfExists('murids');
    }
}

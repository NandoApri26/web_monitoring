<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKerusakansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerusakans', function (Blueprint $table) {
            $table->id('id_kerusakan');
            $table->foreignId('gerbang_id')->constrained('gerbangs')->onUpdate('restrict')->onDelete('restrict')->references('id_gerbang')->on('gerbangs');
            $table->string('jenis_kerusakan');
            $table->date('waktu_kejadian');
            $table->date('waktu_datang');
            $table->string('waktu_selesai');
            $table->string('lama_penanganan');
            $table->string('kondisi_akhir');
            $table->string('gardu');
            $table->foreignId('alat_id')->constrained('tools')->onUpdate('restrict')->onDelete('restrict')->references('id_alat')->on('tools');
            $table->string('pelaksanaan_perbaikan');
            $table->string('tempat_perbaikan');
            $table->string('uraian_kerusakan');
            $table->string('perbaikan');
            $table->string('perbaikan_komponen');
            $table->string('status_akhir');
            $table->foreignId('user_id')->constrained('users')->onUpdate('restrict')->onDelete('restrict');
            $table->string('nama_kslt');
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
        Schema::dropIfExists('kerusakans');
    }
}

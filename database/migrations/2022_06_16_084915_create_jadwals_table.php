<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id('id_jadwal');
            $table->date('tgl_perawatan');
            $table->foreignId('gerbang_id')->constrained('gerbangs')->onUpdate('restrict')->onDelete('restrict')->references('id_gerbang')->on('gerbangs');
            $table->string('jenis_perawatan');
            $table->string('tempat_perawatan');
            $table->string('kondisi_akhir');
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
        Schema::dropIfExists('jadwals');
    }
}

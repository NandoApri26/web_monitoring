<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerawatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perawatans', function (Blueprint $table) {
            $table->id('id_perawatan');
            $table->foreignId('user_id')->constrained('users')->onUpdate('restrict')->onDelete('restrict')->references('id')->on('users');
            $table->date('tgl_perawatan');
            $table->date('waktu_teknisi_datang');
            $table->string('kelas_perawatan');
            $table->string('kondisi_alat');
            $table->foreignId('gerbang_id')->constrained('gerbangs')->onUpdate('restrict')->onDelete('restrict')->references('id_gerbang')->on('gerbangs');
            $table->foreignId('alat_id')->constrained('tools')->onUpdate('restrict')->onDelete('restrict')->references('id_alat')->on('tools');
            $table->string('gardu');
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
        Schema::dropIfExists('perawatans');
    }
}

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
        Schema::create('praproposals', function (Blueprint $table) {
            $table->id();
            $table->integer('status');
            $table->foreignId('user_id');
            $table->text('judul');
            $table->text('sumber_ide');
            $table->text('keminatan');
            $table->text('tipe_penelitian');
            $table->text('calon_dosen_pembimbing');
            $table->text('latar_belakang');
            $table->text('rumusan_masalah');
            $table->text('metode_penyelesaian');
            $table->text('daftar_pustaka');
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
        Schema::dropIfExists('praproposals');
    }
};

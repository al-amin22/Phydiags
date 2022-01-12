<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAnggotaKelasIdToHasilUjian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hasil_ujian', function (Blueprint $table) {
            $table->bigInteger('anggota_kelas_id')->after('peserta_ujian_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hasil_ujian', function (Blueprint $table) {
            //
        });
    }
}

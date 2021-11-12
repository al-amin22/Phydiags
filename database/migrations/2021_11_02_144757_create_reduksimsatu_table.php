<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReduksimsatuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reduksimsatu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('des_msc');
            $table->string('des_kon');
            $table->string('model_reduksi');
            $table->text('text_reduksi');
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
        Schema::dropIfExists('reduksimsatu');
    }
}

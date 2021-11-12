<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReduksimtigaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reduksimtiga', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('des_msctiga');
            $table->string('des_kontiga');
            $table->string('model_reduksitiga');
            $table->text('text_reduksitiga');
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
        Schema::dropIfExists('reduksimtiga');
    }
}

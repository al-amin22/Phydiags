<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReduksimempatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reduksimempat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('des_mscempat');
            $table->string('des_konempat');
            $table->string('model_reduksiempat');
            $table->text('text_reduksiempat');
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
        Schema::dropIfExists('reduksimempat');
    }
}

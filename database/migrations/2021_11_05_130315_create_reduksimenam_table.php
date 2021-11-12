<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReduksimenamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reduksimenam', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->string('des_mscenam');
            $table->string('des_konenam');
            $table->string('model_reduksienam');
            $table->text('text_reduksienam');
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
        Schema::dropIfExists('reduksimenam');
    }
}

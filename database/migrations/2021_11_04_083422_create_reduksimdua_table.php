<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReduksimduaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reduksimdua', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('des_mscdua');
            $table->string('des_kondua');
            $table->string('model_reduksidua');
            $table->text('text_reduksidua');
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
        Schema::dropIfExists('reduksimdua');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReduksimlimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reduksimlima', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('des_msclima');
            $table->string('des_konlima');
            $table->string('model_reduksilima');
            $table->text('text_reduksilima');
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
        Schema::dropIfExists('reduksimlima');
    }
}

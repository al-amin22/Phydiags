<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReduksifalsepositiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reduksifalsepositive', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('model_reduksifalsePositive');
            $table->text('text_reduksifalsePositive');
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
        Schema::dropIfExists('reduksifalsepositive');
    }
}

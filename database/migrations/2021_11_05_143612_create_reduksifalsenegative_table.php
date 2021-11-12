<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReduksifalsenegativeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reduksifalsenegative', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->string('model_reduksifalseNegative');
            $table->text('text_reduksifalseNegative');
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
        Schema::dropIfExists('reduksifalsenegative');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostNewCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_new_cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Brandname');
            $table->string('Modelname');
            $table->string('Price');
            $table->string('Featured')->nullable();
            $table->text('Description');
            $table->string('color');
            $table->mediumText('Carimage')->nullable();
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
        Schema::dropIfExists('post_new_cars');
    }
}

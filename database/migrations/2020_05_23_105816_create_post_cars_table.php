<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brandname');
            $table->string('modelname');
            $table->text('description');
            $table->string('price');
            $table->string('rent')->nullable();
            $table->string('sell')->nullable();
            $table->string('color');
            $table->mediumText('carimage')->nullable();
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
        Schema::dropIfExists('post_cars');
    }
}

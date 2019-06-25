<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('price');
            $table->string('name',25);
            $table->string('nameOrj',25);
            $table->integer('category_id');
            $table->string('lang',100);
            $table->string('description');
            $table->string('time');
            $table->integer('year');
            $table->string('country');
            $table->string('image')->nullable();
            $table->string('image_banner')->nullable();
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
        Schema::dropIfExists('films');
    }
}

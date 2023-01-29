<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MealTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('meal', function (Blueprint $table) {
            $table->id();
            // 下記を追記する
            $table->string('date');
            $table->string('timezone');
            $table->string('user');
            $table->string('menu');
            $table->string('image');
            // 上記までを追記する
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
        Schema::dropIfExists('content_images');
    }
}

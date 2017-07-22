<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Advanced extends Migration
{

    public function up()
    {
        //
        Schema::create('advanced', function (Blueprint $table) {
            $table->increments('id');      
            $table->string('name_eng');
            $table->string('name_chinese');
            $table->string('bggid');
            $table->integer('rating');
            $table->integer('player_min');
            $table->integer('player_max');
            $table->integer('publish_year');
            $table->integer('game_time');
            $table->integer('catalog1_rank');
            $table->string('catalog2');
            $table->integer('catalog2_rank');
            $table->string('catalog3');
            $table->integer('catalog3_rank');
            $table->string('imgsrc');
            $table->integer('cht_version');
            $table->string('chinese_resource')->nullable();
            $table->string('temp_chinese_resource')->nullable();
        });
    }


    public function down()
    {
        Schema::dropIfExists('advanced');
    }
}

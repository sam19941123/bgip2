<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Link extends Migration
{

    public function up()
    {
        Schema::create('link', function (Blueprint $table) {
            $table->increments('id')->unique;
            $table->string('bggid');
            $table->string('username');
            $table->string('link');
            $table->string('title');
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('link');
    }
}

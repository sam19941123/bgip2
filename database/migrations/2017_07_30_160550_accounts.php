<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Accounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account');
            $table->string('password');      
            $table->string('name');
            $table->string('gender');
            $table->string('age');
            $table->string('password_confirm'); 
            $table->>string('remember_token', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

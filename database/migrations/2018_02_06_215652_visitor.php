<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Visitor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors',function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('idNumber');
            $table->string('type');
            $table->string('mobile');
            $table->string('visitees');
            $table->string('purpose');
            $table->boolean('indoor')->default(false);
            $table->binary('vimage')->nullable();
            $table->binary('depTime')->nullable();
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
        Schema::drop('visitors');
    }
}

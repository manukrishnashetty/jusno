<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('time');
            $table->string('from');
            $table->string('to');
            $table->string('via');
            $table->string('price');
            $table->string('km');
            $table->string('bus_no');        
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
         Schema::dropIfExists('time_table');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StopDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('stop_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('stop_name');
            $table->string('is_stage');
            $table->string('uniq_id')->unique();
         
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
          Schema::dropIfExists('stop_detail');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Gallary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('gallary', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('auth_id');               
            $table->string('auth_name');        
            $table->string('rating');        
            $table->string('id_delete');        
            $table->string('img_content');        
            $table->string('image');        
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
           Schema::dropIfExists('gallary');

    }
}

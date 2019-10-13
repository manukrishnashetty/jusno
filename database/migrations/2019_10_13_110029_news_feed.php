<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewsFeed extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('news_feed', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('auth_id');               
            $table->string('auth_name');        
            $table->string('rating');        
            $table->string('id_delete');        
            $table->string('heading');        
            $table->string('place');        
            $table->string('category');               
            $table->string('content');        
            $table->string('image_video');        
            $table->timestamps();
        }); ; 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('news_feed');
    }
}

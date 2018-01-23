<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_media', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('story_id')->unsigned();
            $table->string('source', 300);
            $table->string('caption')->nullable();
            $table->string('mime', 100);
            $table->timestamps();

            $table->foreign('story_id')->references('id')->on('app_stories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_media');
    }
}

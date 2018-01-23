<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppEntityTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_entity_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reference')->unsigned();
            $table->string('table', 100);
            $table->integer('tag_id')->unsigned();
            $table->timestamps();

            $table->foreign('tag_id')->references('id')->on('app_tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_entity_tags');
    }
}

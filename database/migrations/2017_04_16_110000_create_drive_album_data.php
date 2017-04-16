<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriveAlbumData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drive_album_data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('album_id')->unsigned();
            $table->bigInteger('data_id')->unsigned();
            $table->timestamp('created_at')->nullable();

            $table->foreign('album_id')->references('id')->on('drive_albums')->onDelete('cascade');
            $table->foreign('data_id')->references('id')->on('drive_data')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drive_album_data');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriveData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drive_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->string('file_name', 300);
            $table->text('path', 500);
            $table->integer('parent')->default(0);
            $table->boolean('is_directory')->default(false);
            $table->boolean('is_private')->default(true);
            $table->string('mime', 100);
            $table->string('access_token', 150);
            $table->integer('download_total')->default(0);
            $table->integer('download_max')->default(0);
            $table->enum('privacy', ['public', 'private', 'follower'])->default('private');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('app_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drive_data');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppConversations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_conversations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('message_id')->unsigned();
            $table->integer('sender')->unsigned();
            $table->integer('receiver')->unsigned();
            $table->text('message');
            $table->string('media')->nullable();
            $table->string('mime')->nullable();
            $table->boolean('is_available_sender')->default(true);
            $table->boolean('is_available_receiver')->default(true);
            $table->timestamps();

            $table->foreign('message_id')->references('id')->on('app_messages')->onDelete('cascade');
            $table->foreign('sender')->references('id')->on('app_users')->onDelete('cascade');
            $table->foreign('receiver')->references('id')->on('app_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_conversations');
    }
}

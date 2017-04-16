<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('reference');
            $table->string('table', 100);
            $table->integer('user_id')->default(0);
            $table->integer('parent')->default(0);
            $table->string('name', 100);
            $table->string('email', 50)->nullable();
            $table->string('url')->nullable();
            $table->text('content');
            $table->boolean('is_approved')->default(true);
            $table->string('ip', 50)->nullable();
            $table->string('agent')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('app_comments');
    }
}

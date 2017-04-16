<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('slug', 300);
            $table->string('title', 170);
            $table->text('content');
            $table->string('excerpt', 500);
            $table->integer('view');
            $table->enum('status', ['published', 'draft']);
            $table->enum('privacy', ['public', 'private', 'follower'])->default('public');
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
        Schema::dropIfExists('blog_posts');
    }
}

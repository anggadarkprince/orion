<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('username', 30)->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('avatar')->default('no_avatar.jpg');
            $table->string('cover')->default('no_cover.jpg');
            $table->string('about', 300)->nullable();
            $table->string('contact', 100)->nullable();
            $table->string('location')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->default('other');
            $table->date('birthday')->nullable();
            $table->enum('privacy', ['public', 'private', 'follower'])->default('public');
            $table->string('blog_tagline', 100)->default('My Personal Blog');
            $table->string('blog_sub_tagline', 100)->default('Craft things, share ideas');
            $table->string('cv_profile', 1000)->nullable();
            $table->string('cv_advantages', 500)->nullable();
            $table->string('cv_deficiency', 500)->nullable();
            $table->boolean('is_activated')->default(false);
            $table->boolean('is_suspended')->default(false);
            $table->dateTime('suspended_at')->nullable();
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();

            $table->index(['id', 'username', 'email']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_users');
    }
}

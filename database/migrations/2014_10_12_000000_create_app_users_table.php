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
            $table->string('about', 500)->nullable();
            $table->string('contact', 100)->nullable();
            $table->string('location')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->default('other');
            $table->date('birthday')->nullable();
            $table->enum('privacy', ['public', 'private', 'follower'])->default('public');
            $table->rememberToken();
            $table->boolean('is_activated')->default(false);
            $table->timestamp('suspended_at')->nullable();
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

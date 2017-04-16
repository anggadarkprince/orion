<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowcasePortfolios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showcase_portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('title', 150);
            $table->string('description', 800);
            $table->string('featured', 300);
            $table->string('company', 100);
            $table->string('url', 500);
            $table->date('date');
            $table->string('licence', 100);
            $table->integer('view')->default(0);
            $table->integer('like')->default(0);
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
        Schema::dropIfExists('showcase_portfolios');
    }
}

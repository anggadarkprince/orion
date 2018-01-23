<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowcaseCollaborators extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showcase_collaborators', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('portfolio_id')->unsigned();
            $table->integer('user_id')->default(0);
            $table->string('name', 50)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('contact', 50)->nullable();
            $table->string('url')->nullable();
            $table->timestamps();

            $table->foreign('portfolio_id')->references('id')->on('showcase_portfolios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('showcase_collaborators');
    }
}

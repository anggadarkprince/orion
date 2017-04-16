<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowcasePortfolioFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showcase_portfolio_fields', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('portfolio_id')->unsigned();
            $table->integer('field_id')->unsigned();
            $table->timestamps();

            $table->foreign('portfolio_id')->references('id')->on('showcase_portfolios')->onDelete('cascade');
            $table->foreign('field_id')->references('id')->on('showcase_fields')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('showcase_portfolio_fields');
    }
}

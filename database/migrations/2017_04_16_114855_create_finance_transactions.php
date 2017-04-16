<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wallet_id')->unsigned();
            $table->string('title', 100);
            $table->string('description', 500);
            $table->dateTime('date');
            $table->enum('type', ['debit', 'credit', 'untracked']);
            $table->decimal('amount', 12, 2);
            $table->decimal('balance', 20, 2);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('wallet_id')->references('id')->on('finance_wallets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('finance_transactions');
    }
}

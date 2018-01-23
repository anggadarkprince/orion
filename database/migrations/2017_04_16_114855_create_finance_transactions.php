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
            $table->integer('account_id')->unsigned();
            $table->string('title', 100);
            $table->string('transaction_desc', 500);
            $table->dateTime('transaction_date');
            $table->dateTime('location');
            $table->enum('transaction_type', ['income', 'expense', 'untracked'])->default('expense');
            $table->decimal('amount', 12, 2);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('account_id')->references('id')->on('finance_accounts')->onDelete('cascade');
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJournalReminders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journal_reminders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('book_id')->unsigned();
            $table->string('task');
            $table->string('description', 500);
            $table->string('location', 500)->nullable();
            $table->date('date')->nullable();
            $table->time('time');
            $table->enum('frequency', ['daily', 'once']);
            $table->enum('remind', [5, 10, 15, 30, 24, 72]);
            $table->boolean('email_notification')->default(true);
            $table->boolean('sms_notification')->default(false);
            $table->boolean('push_notification')->default(false);
            $table->boolean('is_starred')->default(false);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('book_id')->references('id')->on('journal_books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journal_reminders');
    }
}

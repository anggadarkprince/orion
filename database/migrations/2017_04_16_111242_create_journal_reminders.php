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
            $table->integer('user_id')->unsigned();
            $table->string('task');
            $table->enum('task_type', ['alarm', 'task'])->default('task');
            $table->string('task_desc', 500)->nullable();
            $table->string('location', 500)->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->string('frequency')->default('once');
            $table->enum('remind_before', [5, 10, 15, 30, 24, 72]);
            $table->boolean('email_notification')->default(true);
            $table->boolean('sms_notification')->default(false);
            $table->boolean('push_notification')->default(false);
            $table->string('sound')->nullable(false);
            $table->boolean('is_starred')->default(false);
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
        Schema::dropIfExists('journal_reminders');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJournalNotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journal_notes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('book_id')->unsigned();
            $table->string('title', 100);
            $table->text('content');
            $table->boolean('is_markdown')->default(false);
            $table->boolean('is_starred')->default(false);
            $table->enum('privacy', ['public', 'private', 'follower'])->default('private');
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
        Schema::dropIfExists('journal_notes');
    }
}

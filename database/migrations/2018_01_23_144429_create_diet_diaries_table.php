<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDietDiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diet_diaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->dateTime('date');
            $table->enum('group', ['breakfast', 'lunch', 'dinner', 'snack', 'exercise']);
            $table->enum('reference_type', ['food', 'meal', 'exercise', 'other']);
            $table->string('reference')->nullable();
            $table->integer('duration')->default(0);
            $table->integer('calories')->default(0);
            $table->integer('protein')->default(0);
            $table->integer('carbohydrate')->default(0);
            $table->integer('fiber')->default(0);
            $table->integer('added_sugar')->default(0);
            $table->integer('natural_sugar')->default(0);
            $table->integer('fat')->default(0);
            $table->integer('saturated_fat')->default(0);
            $table->integer('unsaturated_fat')->default(0);
            $table->integer('sodium')->default(0);
            $table->integer('cholesterol')->default(0);
            $table->integer('potassium')->default(0);
            $table->string('daily_note', 300)->nullable();
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
        Schema::dropIfExists('diet_diaries');
    }
}

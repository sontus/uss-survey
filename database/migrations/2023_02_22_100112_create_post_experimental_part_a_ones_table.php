<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_experimental_part_a_ones', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('question_set')->nullable();
            $table->string('question_one')->nullable();
            $table->string('question_two_1')->nullable();
            $table->string('question_two_2')->nullable();
            $table->string('question_two_3')->nullable();
            $table->string('question_two_4')->nullable();
            $table->string('question_three_1')->nullable();
            $table->string('question_three_2')->nullable();
            $table->string('question_three_3')->nullable();
            $table->string('question_three_4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_experimental_part_a_ones');
    }
};

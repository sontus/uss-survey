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
        Schema::create('post_experimental_part_d_s', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('question_set')->nullable();
            $table->string('question_one')->nullable();
            $table->string('question_two')->nullable();
            $table->string('question_three')->nullable();
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
        Schema::dropIfExists('post_experimental_part_d_s');
    }
};

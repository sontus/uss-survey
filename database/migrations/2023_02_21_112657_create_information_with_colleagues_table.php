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
        Schema::create('information_with_colleagues', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('question_one')->nullable();
            $table->string('question_two')->nullable();
            $table->string('question_three')->nullable();
            $table->string('question_four')->nullable();
            $table->string('question_five')->nullable();
            $table->string('question_set')->nullable();
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
        Schema::dropIfExists('information_with_colleagues');
    }
};

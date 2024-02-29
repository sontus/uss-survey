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
        Schema::create('answersheet', function (Blueprint $table) {
            $table->id();
            $table->string('page_number');
            $table->integer('box_1')->nullable();
            $table->integer('box_2')->nullable();
            $table->integer('box_3')->nullable();
            $table->integer('box_4')->nullable();
            $table->integer('box_5')->nullable();
            $table->integer('box_6')->nullable();
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
        Schema::dropIfExists('answersheet');
    }
};

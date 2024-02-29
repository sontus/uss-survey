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
        Schema::create('post_experimental_part_n_s', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('gender')->nullable();
            $table->integer('age')->nullable();
            $table->string('work_experience')->nullable();
            $table->string('work_type')->nullable();
            $table->string('experience_year')->nullable();
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
        Schema::dropIfExists('post_experimental_part_n_s');
    }
};

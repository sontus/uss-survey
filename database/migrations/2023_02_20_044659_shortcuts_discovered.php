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
        Schema::create('shortcuts_discovered', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('box_1')->nullable();
            $table->string('box_2')->nullable();
            $table->string('box_3')->nullable();
            $table->string('box_4')->nullable();
            $table->string('box_5')->nullable();
            $table->string('box_6')->nullable();
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
        Schema::dropIfExists('shortcuts_discovered');
    }
};

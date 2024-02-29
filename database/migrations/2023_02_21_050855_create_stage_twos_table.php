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
        Schema::create('stage_twos', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('page_141')->nullable();
            $table->string('page_142')->nullable();
            $table->string('page_261')->nullable();
            $table->string('page_262')->nullable();
            $table->string('page_281')->nullable();
            $table->string('page_282')->nullable();
            $table->string('page_301')->nullable();
            $table->string('page_302')->nullable();
            $table->string('page_321')->nullable();
            $table->string('page_322')->nullable();
            $table->string('page_351')->nullable();
            $table->string('page_352')->nullable();
            $table->string('page_353')->nullable();
            $table->string('page_354')->nullable();
            $table->string('page_371')->nullable();
            $table->string('page_372')->nullable();
            $table->string('page_373')->nullable();
            $table->string('page_374')->nullable();
            $table->string('page_375')->nullable();
            $table->string('page_40')->nullable();
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
        Schema::dropIfExists('stage_twos');
    }
};

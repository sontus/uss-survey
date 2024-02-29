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
        Schema::create('participant_payments', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->double('fixed_payment',10,2);
            $table->float('performance_payment',10,2);
            $table->enum('payment_status',['Paid','Unpaid'])->default('Unpaid');
            $table->date('payment_date')->nullable();
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
        Schema::dropIfExists('participant_payments');
    }
};

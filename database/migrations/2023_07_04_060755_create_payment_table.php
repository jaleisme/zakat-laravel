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
        Schema::create('payment', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('muzakki_id')->index('muzakki_id');
            $table->unsignedInteger('payment_type_id')->index('payment_type_id');
            $table->unsignedBigInteger('amil_id')->index('amil_id');
            $table->double('amount');
            $table->integer('number_of_person');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment');
    }
};

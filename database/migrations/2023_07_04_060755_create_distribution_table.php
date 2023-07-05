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
        Schema::create('distribution', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedInteger('mustahik_id')->index('mustahik_id');
            $table->double('amount_money')->nullable();
            $table->double('amount_rice')->nullable();
            $table->tinyText('notes');
            $table->dateTime('distributed_at');
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distribution');
    }
};

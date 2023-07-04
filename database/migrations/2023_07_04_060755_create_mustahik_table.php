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
        Schema::create('mustahik', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mustahik_category_id')->index('mustahik_category_id');
            $table->string('fullname', 50);
            $table->tinyText('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mustahik');
    }
};

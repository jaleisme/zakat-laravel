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
        Schema::table('distribution', function (Blueprint $table) {
            $table->foreign(['mustahik_id'], 'FK_distribution_mustahik')->references(['id'])->on('mustahik');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('distribution', function (Blueprint $table) {
            $table->dropForeign('FK_distribution_mustahik');
        });
    }
};

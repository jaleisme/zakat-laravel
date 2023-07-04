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
        Schema::table('mustahik', function (Blueprint $table) {
            $table->foreign(['mustahik_category_id'], 'FK_mustahik_mustahik_categories')->references(['id'])->on('mustahik_category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mustahik', function (Blueprint $table) {
            $table->dropForeign('FK_mustahik_mustahik_categories');
        });
    }
};

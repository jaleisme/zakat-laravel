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
        Schema::table('payment', function (Blueprint $table) {
            $table->foreign(['payment_type_id'], 'FK_payment_payment_type')->references(['id'])->on('payment_type');
            $table->foreign(['muzakki_id'], 'FK_payment_muzakki')->references(['id'])->on('muzakki');
            $table->foreign(['amil_id'], 'FK_payment_users')->references(['id'])->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payment', function (Blueprint $table) {
            $table->dropForeign('FK_payment_payment_type');
            $table->dropForeign('FK_payment_muzakki');
            $table->dropForeign('FK_payment_users');
        });
    }
};
